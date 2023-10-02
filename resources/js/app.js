import Dropzone from "dropzone";
 
Dropzone.autoDiscover = false;

const dropzone = new Dropzone(".dropzone", {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false,
});

dropzone.on("success", function(file , response){
    console.log("Imagen subida con exito")
});
dropzone.on("error", function(file , message){
    console.log("Error al subir imagen")
});
dropzone.on("removedfile", function(){
    console.log("Archivo eliminado")
});