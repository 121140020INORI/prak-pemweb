// INORI MUIRA SITANGGANG - 121140020 - [RB]


//dengan menggunakan addEventListener("click", function () { ... })` bertujuan untuk mengikat event listener pada tombol dengan id "hitung"
//sehingga ketika tombol "hitung" diklik, fungsi yang ditentukan akan dipanggil
document.getElementById("hitung").addEventListener("click", function() { 
    const inputBil = parseInt(document.getElementById("bil").value, 10); // nilai 10 berperan sebagai argumen kedua yg digunakan dalam fungsi parseInt (mengkonversi string ke bilangan bulat dlm JS)
                                                                        // yang dapat mengindikasikan bahwa (sekiranya ada)string akan diuraikan sebgaai bilangan bulat desimal.
if (!isNaN(inputBil)){ //isNaN adalah fungsi untuk mengecek suatu nilai merupakan angka atau bukan.
    let SumGanjil = 0; //inisiasi variabel awal untuk menyimpan jumlah angka genap
    let SumGenap = 0; //inisiasi variabel awal untuk menyimpan jumlah angka ganjil 

    for (let i=1; i <= inputBil; i++){
        if (i % 2 == 0){ //percabangan pertama untuk mneyeleksi angka apakah termasuk dalam bilangan genap, jika tidak maka masuk ke dalam percabangan kedua
            SumGenap++;
        } else {
            SumGanjil++;
        }
    }

    //variabel const digunakan untuk menyimpan nilai atau data yang dapat diakses atau digunakan, dimana nilai variabel ini tidak dapat diubah (konstan).
    const spanganjil = document.getElementById("ganjil");
    const spangenap = document.getElementById("genap");

   spanganjil.textContent = `Jumlah bilangan ganjil: ${SumGanjil}`; //menampilkan jumlah bilangan ganjil
   spangenap.textContent = `Jumlah bilangan genap: ${SumGenap}`; //menampilkan jumlah bilangan genap
}
});