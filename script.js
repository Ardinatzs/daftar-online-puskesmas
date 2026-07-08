const form=document.getElementById("formDaftar");
const hasil=document.getElementById("hasil");

let nomor=1;

form.addEventListener("submit",function(e){

e.preventDefault();

let nama=document.getElementById("nama").value;
let nik=document.getElementById("nik").value;
let hp=document.getElementById("hp").value;
let jk=document.getElementById("jk").value;
let tanggal=document.getElementById("tanggal").value;
let poli=document.getElementById("poli").value;
let keluhan=document.getElementById("keluhan").value;

hasil.innerHTML+=`

<tr>

<td>${nomor++}</td>
<td>${nama}</td>
<td>${nik}</td>
<td>${hp}</td>
<td>${jk}</td>
<td>${tanggal}</td>
<td>${poli}</td>
<td>${keluhan}</td>

</tr>

`;

alert("Pendaftaran Berhasil");

form.reset();

});