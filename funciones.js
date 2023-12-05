const tiendbd = (nombrebd, tabla) => {
    //creando la base de datos

    const bd = new Dexie(nombrebd);
    bd.version(1).stores(tabla);
    bd.open();
    return bd;

}

//Funcion de guardar
const guardar =(tabla, datos)=>{
    let flag = empty (datos);
    if (flag){
        tabla.bulkAdd({datos});
        console.log("Ya funciona");
      }else {
        console.log("No funciona");
      }
      return flag;
}

//Validacion
const empty = object => {
    let flag = false;
    for(const value in object){
        if(object[value]!= "" && object.has0wnProperty(value)){
            flag =true;
        }else{
            flag = false;
        }
    }   
    return flag;
}
    //Consultando datos
    const consultar = (tabla, funcion) => {
        let index = 0;
        let obj = {}
        tabla.count((cantidad) => {
            if(cantidad){
                tabla.each(producto => {
                    producto = ordenarCampos(producto);
                    funcion(producto, index++);
                })
            } else{
                funcion(0);
            }
        })
    }
    
    //definir orden de los campos
    const ordenarCampos = producto => {
        let objProducto = {};
        objProducto = {
            id: producto.id,
            nombre: producto.nombre,
            costo: producto.precio,
            descripcion: producto.descripcion
        }
        return objProducto;
    }
    
    //creando etiquetas para agregar en la página 
    const crearEtiqueta = ((etiqueta, agregarA, funcion) => {
        const etiquetaACrear = document.createElement(etiqueta);
        if(etiquetaACrear){
            agregarA.appendChild(etiquetaACrear);
        }
        if(funcion){
            funcion(etiquetaACrear);
        }
    })
    
export { guardar, consultar, crearEtiqueta }
export default tiendbd;