<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LatihanForm2</title>
</head>
<body>
<form name="Latihan1" id="latihan1" method="post" onsubmit="return checkform(this)" action="">
    <div>
        NIM<br>
        <input type="text" name="txNIM" id="txNIM"><br>
    </div>
    <div>
        Jenis Kelamin
        <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" id="txJK" value="P">Perempuan
    </div>
    <div>
        Jurusan
        <select name="txJurusan" id="txJurusan">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DKV">DKV</option>
        </select>
    </div>
    <div>
        Hobi
        <input type="checkbox" name="txhobibola" id="txhobi"value="1">Sepak Bola
        <input type="checkbox" name="txhobibulutangkis" id="txhobi" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobivolly" id="txhobi" value="3">Bola Volly
        <input type="checkbox" name="txhobibasket" id="txhobi" value="4">bolabasket
        <input type="checkbox" name="txhobirenang" id="txhobi" value="5">Renang 
    </div>
    <div>
        <button type="submit">KIRIM</button>
    </div>
</form>

<script type="text/javascript">
   function checkform() {
    let frm = document.getElementById('latihan1').elements;

    let NIM =  frm.txNIM.value;
    let JenisKelamin = frm.txJK.value;
    let Jurusan = frm.txJurusan.value;
    let hobi = [
        frm.txhobi[0].checked,
        frm.txhobi[1].checked,
        frm.txhobi[2].checked,
        frm.txhobi[3].checked,
        frm.txhobi[4].checked
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