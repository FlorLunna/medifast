import tiendabd, {guardar, crearEtiqueta, consultar} from "/funciones.js";
//Indicamos el nombre de la base de datos "Tienda", la tabla "productos"
//y sus atributos ++id(autoincremental), nombre, precio y descripción.
let bd = tiendabd("Tienda", { productos: `++id,nombre, precio,descripcion `});

//recuperar inputs del formulario 
const clave_prod = document.getElementById("clave");
const nombre_prod = document.getElementById("nombre");
const costo_prod = document.getElementById("costo");
const desc_prod = document.getElementById("descripcion");
const mensajesSinRegistros = document.getElementById("siRegistros");

//accediendo a botones
const btnGuardar = document.getElementById("guardar");
const btnModificar = document.getElementById("modificar");
const btnEliminarTodo = document.getElementById("eliminar-todo");


window.onload = () => {
    cargarTabla();
}

//evento click para guardar
btnGuardar.onclick = (evento =>{
    //se envian los datos del formulario a la funcion guardar 
    let flag = guardar(bd.productos, {
        nombre: nombre_prod.value,
        precio: costo_prod.value,
        descripcion: desc_prod.value,
    });
    cargarTabla();
})

//evento click para guardar los cambios 
btnModificar.onclick = (evento => {
    //Se recupera el id del producto a modificar
    const id = parseInt(clave_prod.value || 0);
    if (id){
        //si existe el id se envian los datos del formulario a la funcion guardar del archivo
        bd.productos.update(id, {
            nombre: nombre_prod.value,
            precio: costo_prod.value,
            descripcion: desc_prod.value,
        }).then((resultado) => {
            if(resultado) {
                console.log("Modificación realiazda");
                nombre_prod.value = "";
                costo_prod.value ="";
                desc_prod.value = "";
                cargarTabla();
            }
        });
    }
})
//cargar de consultar los productos 
//Encargada de consultar los productos y enviarlos al HTML (interfaz)
function cargarTabla(){
    const tbody = document.getElementById("tbody");
    while(tbody.hasChildNodes()){
        tbody.removeChild(tbody.firstChild);
    }
    consultar(bd.productos, (productos) => {
        if(productos){
            mensajesSinRegistros.textContent = "";
            
            crearEtiqueta("tr", tbody, (tr) =>{
                for(const atributo in productos){
                    crearEtiqueta("td", tr, (td) => {
                        td.textContent = productos.precio === productos[atributo] ?
                    `$ ${productos[atributo]}` : productos[atributo];
                    });
                }
                crearEtiqueta("td", tr, (td) => {
                    crearEtiqueta("i", td, (i) => {
                        i.className += "icon-pencil";
                        i.setAttribute(`data-id`, productos.id);
                        i.onclick = btnEditar;
                    });
                });
                crearEtiqueta("td", tr, (td) => {
                    crearEtiqueta("i", td, (i) => {
                        i.className += "icon-minus";
                        i.setAttribute(`data-id`, productos.id);
                        i.onclick = btnEliminar;
                    });
                });
            });
        }else{
            mensajesSinRegistros.textContent = "No existen productos registrados";
        }
    });
}

//botón (lápiz) que manda editar un elemento, llena los datos en el formulario 
function btnEditar(evento){
    let id = parseInt(evento.target.dataset.id);
    bd.productos.get(id, (producto)=>{
        clave_prod.value =producto.id  || 0;
        nombre_prod.value = producto.nombre || "";
        costo_prod.value = producto.precio || "";
        desc_prod.value = producto.descripcion || "";
    });
}
