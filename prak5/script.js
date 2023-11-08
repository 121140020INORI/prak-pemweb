//INORI MUIRA SITANGGANG - 121140020 - [RB]

// fungsi untuk membersihkan are input box yang dilambangkan dengan huruf 'C'
function bersih() {
    document.getElementById("hasil").value = "";
}
 
// fungsi tampilan yang berisikan nilai-nilai angka ataupun simbol operasi/ekspresi bilangan sederhana
function display(value) {
    document.getElementById("hasil").value += value; //ketika salah satu value diklik, maka yang akan dilakukan adalah melakukan ekspresi/operasi selanjutnya sesuai dnegan value operasi bilangan yang diklik
}
 
// fungsi ini mengakses DOM menggunakan ID hasil dengan mengevaluasi ekspresi dan mengembalikannya ke dalam tetapan hasil
function hitung() {
    var p = document.getElementById("hasil").value;
    var q = eval(p);
    document.getElementById("hasil").value = q;
}