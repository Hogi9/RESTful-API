// //object
// let mahasiswa = 
// {
//     nama : "M Darojatun Hogi",
//     npm : "18081010088",
//     email : "hogi_p@yahoo.co.id"
// }

// //object jadi json
// console.log (JSON.stringify(mahasiswa));


//mengubah JSON menjadi object
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
        let mahasiswa = this.responseText;
        console.log(mahasiswa);
    }
}

//true untuk asyncronus, jika tidak maka syncronus
xhr.open('GET','data.JSON',true);
xhr.send();