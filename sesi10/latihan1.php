<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LatihanForm1</title>
</head>
<body>
    
<form name="Latihan1" method="post" onsubmit="return checkform(this)" action="">
    <div>
        NIM<br>
        <input type="text" name="txNIM"><br>
    </div>
    <div>
        Jenis Kelamin
        <input type="radio" name="txJK" value="L">Laki-Laki
    <input type="radio" name="txJK" value="P">Perempuan
    </div>
    <div>
        Jurusan
        <select name="txJurusan" >
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DKV">DKV</option>
        </select>
    </div>
    <div>
        Hobi
        <input type="checkbox" name="txhobibola" value="1">Sepak Bola
        <input type="checkbox" name="txhobibulutangkis" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobivolly" value="3">Bola Volly
        <input type="checkbox" name="txhobibasket" value="4">bolabasket
        <input type="checkbox" name="txhobirenang" value="5">Renang 
    </div>
    <div>
        <button type="submit">KIRIM</button>
    </div>
</form>

<script type="text/javascript">
    function checkform(frm){
       let form = frm.elements;
       let NIM = form.namedItem("txNIM").value;
       let JenisKelamin = form.namedItem("txJK").value;
       let Jurusan = form.namedItem("txJurusan").value;
       let hobi = [
        form.namedItem("txhobibola").checked,
        form.namedItem("txhobibulutangkis").checked,
        form.namedItem("txhobivolly").checked,
        form.namedItem("txhobibasket").checked,
        form.namedItem("txhobirenang").checked
       ]

       console.log("NIM: " + NIM);
       console.log("Jenis Kelamin: " + JenisKelamin);
       console.log("Jurusan: " + Jurusan);
       console.log("hobi: " + hobi);    

       return false;
    }   
</script>
</body>
</html>