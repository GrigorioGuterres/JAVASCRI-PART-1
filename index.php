<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>

        // declara variabel 
       let info1 =10;
       let info2 =30;

    //    kontagen

    let resul = info1 * info2 ;
    let resulp = info1 + info2 ;
    let resul1 = info1 - info2 ;

    // logika 

    let kiik = info1 > info2;
    let boot =info1 < info2;
    let hanesan = info1 ===info2;
    let kiikliuhanesan = info1 <=info2;
    let lahanesan = info1 !==info2;



    console.log(resul)
    console.log(resulp)
    console.log(resul1)

    console.log("apakah info1 lebih besar dari info2 ?" + boot);
    console.log("apakah info1 lebih kitsil dari info2 ?" + kiik);
    console.log("apakah info1 dan   info2 ankan yang sama ?" + hanesan);
    console.log("apakah info1 kiik liu hanesan info2 ?" + kiikliuhanesan);
    console.log("apakah info1 lahanesan ho  info2 ?" + lahanesan);

    </script>
</body>
</html> -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let benar = true;
        let salah = false;
let ankapertama =10;
let ankakedua=20;


let bootliu=ankapertama > ankakedua;
console.log(bootliu)

let samatugas=ankapertama < ankakedua;
console.log(samatugas)


    </script>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Output dalam HTML</title>
</head>
<body>
    <script>
        let angkaPertama = 10;
        let angkaKedua = 5;

        // Menambahkan variabel baru
        let angkaKetiga = 7;
        let angkaKeempat = 3;
        
        // Operasi matematika
        let penjumlahan = angkaPertama + angkaKedua + angkaKetiga + angkaKeempat;
        let pengurangan = angkaPertama - angkaKedua - angkaKetiga - angkaKeempat;
        let perkalian = angkaPertama * angkaKedua * angkaKetiga * angkaKeempat;
        let pembagian = angkaPertama / angkaKedua / angkaKetiga / angkaKeempat;
        let modulus = angkaPertama % angkaKedua % angkaKetiga % angkaKeempat;

        // Logika
        let lebihBesar = angkaPertama > angkaKedua && angkaKetiga > angkaKeempat;
        let lebihKecil = angkaPertama < angkaKedua && angkaKetiga < angkaKeempat;
        let samaDengan = angkaPertama === angkaKedua || angkaKetiga === angkaKeempat;
        let tidakSamaDengan = angkaPertama !== angkaKedua || angkaKetiga !== angkaKeempat;
        let lebihBesarSamaDengan = angkaPertama >= angkaKedua && angkaKetiga >= angkaKeempat;
        let lebihKecilSamaDengan = angkaPertama <= angkaKedua && angkaKetiga <= angkaKeempat;
        let tidakBenar = !lebihBesar;

        // Menampilkan hasil
        document.write("Hasil penjumlahan: " + penjumlahan + "<br>");
        document.write("Hasil pengurangan: " + pengurangan + "<br>");
        document.write("Hasil perkalian: " + perkalian + "<br>");
        document.write("Hasil pembagian: " + pembagian + "<br>");
        document.write("Hasil modulus: " + modulus + "<br>");
        document.write("Apakah angkaPertama lebih besar dari angkaKedua dan angkaKetiga lebih besar dari angkaKeempat? " + lebihBesar + "<br>");
        document.write("Apakah angkaPertama lebih kecil dari angkaKedua dan angkaKetiga lebih kecil dari angkaKeempat? " + lebihKecil + "<br>");
        document.write("Apakah angkaPertama sama dengan angkaKedua atau angkaKetiga sama dengan angkaKeempat? " + samaDengan + "<br>");
        document.write("Apakah angkaPertama tidak sama dengan angkaKedua atau angkaKetiga tidak sama dengan angkaKeempat? " + tidakSamaDengan + "<br>");
        document.write("Apakah angkaPertama lebih besar atau sama dengan angkaKedua dan angkaKetiga lebih besar atau sama dengan angkaKeempat? " + lebihBesarSamaDengan + "<br>");
        document.write("Apakah angkaPertama lebih kecil atau sama dengan angkaKedua dan angkaKetiga lebih kecil atau sama dengan angkaKeempat? " + lebihKecilSamaDengan + "<br>");
        document.write("Apakah tidakBenar? " + tidakBenar + "<br>");
    </script>
</body>
</html>
