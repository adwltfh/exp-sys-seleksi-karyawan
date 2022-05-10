const element = document.getElementById("btn-submit");
element.addEventListener("click", AllDepencency);

const obj_temp = {
  kecakapan: "",
  kepribadian: "",
  biografi: "",
  wawancara: "",
};

const cf_user = {
  teori_cf: 0,
  praktik_cf: 0,
  kepribadian_cf: 0,
  ipk_cf: 0,
  domisili_cf: 0,
  usia_cf: 0,
  pk_cf: 0,
  wawancara_cf: 0,
};

let cf_temp_kecakapan;
let cf_temp_biografi;
let cf_temp_kepribadian;
let cf_temp_wawancara;
let nilai_cf_akhir;
let cf_rules_kecakapan;
let cf_rules_biografi;

async function getAllCFUsers() {
  const CF_row1 = Number(document.getElementById("CF-row1").value);
  const CF_row2 = Number(document.getElementById("CF-row2").value);
  const CF_row3 = Number(document.getElementById("CF-row3").value);
  const CF_row4 = Number(document.getElementById("CF-row4").value);
  const CF_row5 = Number(document.getElementById("CF-row5").value);
  const CF_row6 = Number(document.getElementById("CF-row6").value);
  const CF_row7 = Number(document.getElementById("CF-row7").value);
  const CF_row8 = Number(document.getElementById("CF-row8").value);

  cf_user.teori_cf = CF_row1;
  cf_user.praktik_cf = CF_row2;
  cf_user.kepribadian_cf = CF_row3;
  cf_user.ipk_cf = CF_row4;
  cf_user.domisili_cf = CF_row5;
  cf_user.usia_cf = CF_row6;
  cf_user.pk_cf = CF_row7;
  cf_user.wawancara_cf = CF_row8;
}

async function kecakapan() {
  const nilai_teori = document.getElementById("teori").value;
  const nilai_praktik = document.getElementById("praktik").value;
  await getAllCFUsers();
  if (nilai_teori > 100 || (nilai_teori < 0 && nilai_praktik > 100) || nilai_praktik < 0) {
    alert("Data yang dimasukkan salah!");
  } else if (nilai_teori > 80 && nilai_teori <= 100 && nilai_praktik > 80 && nilai_praktik <= 100) {
    obj_temp.kecakapan = "Bagus";
    cf_rules_kecakapan = 0.8;
    let nilai_min = Math.abs(Math.min(cf_user.teori_cf, cf_user.praktik_cf));
    cf_temp_kecakapan = nilai_min * cf_rules_kecakapan;
  } else if (nilai_teori <= 80 && nilai_teori >= 0 && nilai_praktik > 80 && nilai_praktik <= 100) {
    obj_temp.kecakapan = "Sedang";
    cf_rules_kecakapan = 0.6;
    let nilai_min = Math.abs(Math.min(cf_user.teori_cf, cf_user.praktik_cf));
    cf_temp_kecakapan = nilai_min * cf_rules_kecakapan;
  } else if (nilai_teori > 80 && nilai_teori <= 100 && nilai_praktik <= 80 && nilai_praktik >= 0) {
    obj_temp.kecakapan = "Sedang";
    cf_rules_kecakapan = 0.7;
    let nilai_min = Math.abs(Math.min(cf_user.teori_cf, cf_user.praktik_cf));
    cf_temp_kecakapan = nilai_min * cf_rules_kecakapan;
  } else if (nilai_teori <= 80 && nilai_teori >= 0 && nilai_praktik <= 80 && nilai_praktik >= 0) {
    obj_temp.kecakapan = "Buruk";
    cf_rules_kecakapan = 0.6;
    let nilai_min = Math.abs(Math.min(cf_user.teori_cf, cf_user.praktik_cf));
    cf_temp_kecakapan = nilai_min * cf_rules_kecakapan;
  }
}

async function biografi() {
  await getAllCFUsers();

  const usia = document.getElementById("usia").value;
  const domisili = document.getElementById("domisili").value;
  const ipk = document.getElementById("ipk").value;
  const pk = document.getElementById("pk").value;
  if (usia == "1" && domisili == "1" && ipk == "1" && pk == "1") {
    obj_temp.biografi = "Bagus";
    cf_rules_biografi = 0.8;
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "1" && domisili == "1" && ipk == "1" && pk == "2") {
    obj_temp.biografi = "Sedang";
    cf_rules_biografi = 0.7;
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "1" && domisili == "1" && ipk == "2" && pk == "1") {
    obj_temp.biografi = "Sedang";
    cf_rules_biografi = 0.8;
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "1" && domisili == "1" && ipk == "2" && pk == "2") {
    obj_temp.biografi = "Kurang";
    cf_rules_biografi = 0.8;
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "1" && domisili == "2" && ipk == "1" && pk == "2") {
    obj_temp.biografi = "Sedang";
    cf_rules_biografi = 0.5;
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "1" && domisili == "2" && ipk == "2" && (pk == "2" || pk == "1")) {
    obj_temp.biografi = "Kurang";
    cf_rules_biografi = 0.6;
    cf_user.ipk_cf = Math.abs(Math.max(pk));
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "2" && domisili == "1" && ipk == "1" && pk == "2") {
    obj_temp.biografi = "Sedang";
    cf_rules_biografi = 0.8;
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "2" && domisili == "1" && ipk == "1" && pk == "2") {
    obj_temp.biografi = "Kurang";
    cf_rules_biografi = 0.8;
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "2" && domisili == "1" && ipk == "2" && (pk == "2" || pk == "1")) {
    obj_temp.biografi = "Kurang";
    cf_rules_biografi = 0.8;
    cf_user.ipk_cf = Math.abs(Math.max(pk));
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  } else if (usia == "2" && domisili == "2" && (ipk == "1" || ipk == "2") && (pk == "2" || pk == "1")) {
    obj_temp.biografi = "Kurang";
    cf_rules_biografi = 1;
    cf_user.ipk_cf = Math.abs(Math.max(ipk));
    cf_user.ipk_cf = Math.abs(Math.max(pk));
    let nilai_min = Math.abs(Math.min(cf_user.usia_cf, cf_user.domisili_cf, cf_user.pk_cf, cf_user.ipk_cf));
    cf_temp_biografi = nilai_min * cf_rules_biografi;
  }
}
async function kepribadian() {
  await getAllCFUsers();
  const kepribadian = document.getElementById("kepribadian").value;
  console.log(kepribadian);
  if (kepribadian == "1") {
    obj_temp.kepribadian = "Baik";
    cf_temp_kepribadian = Math.abs(cf_user.kepribadian_cf);
  } else if (kepribadian == "2") {
    obj_temp.kepribadian = "Sedang";
    cf_temp_kepribadian = Math.abs(cf_user.kepribadian_cf);
  } else {
    obj_temp.kepribadian = "Kurang";
    cf_temp_kepribadian = Math.abs(cf_user.kepribadian_cf);
  }
}
async function wawancara() {
  await getAllCFUsers();
  const wawancara = document.getElementById("wawancara").value;
  console.log(wawancara);
  if (wawancara == "1") {
    obj_temp.wawancara = "Baik";
    cf_temp_wawancara = Math.abs(cf_user.wawancara_cf);
  } else if (wawancara == "2") {
    obj_temp.wawancara = "Sedang";
    cf_temp_wawancara = Math.abs(cf_user.wawancara_cf);
  } else {
    obj_temp.wawancara = "Kurang";
    cf_temp_wawancara = Math.abs(cf_user.wawancara_cf);
  }
}

function nilaiCF() {
  kecakapan();
}
async function AllDepencency() {
  let rules_seleksi = 1;
  let hasil_seleksi = "";
  await getAllCFUsers();
  await kecakapan();
  await kepribadian();
  await biografi();
  await wawancara();
  if ((obj_temp.kecakapan == "Bagus" || obj_temp.kecakapan == "Sedang") && (obj_temp.kepribadian == "Baik" || obj_temp.kepribadian == "Sedang") && (obj_temp.wawancara == "Baik" || obj_temp.wawancara == "Sedang")) {
    rules_seleksi = 0.8;
    nilai_cf_akhir = Math.abs(Math.min(cf_rules_kecakapan, cf_temp_kepribadian, cf_temp_wawancara) * rules_seleksi);
    hasil_seleksi = "Lulus!";
    swal("Selamat Kamu Lulus", `dengan nilai kepercayaan ${nilai_cf_akhir}`, "success");
    console.log(nilai_cf_akhir);
    console.log(cf_temp_kecakapan, cf_temp_biografi, cf_temp_kepribadian, cf_temp_wawancara, nilai_cf_akhir, cf_rules_kecakapan, cf_rules_biografi);
  } else if (obj_temp.kecakapan == "Buruk" || obj_temp.kepribadian == "Kurang" || obj_temp.wawancara == "Kurang") {
    rules_seleksi = 0.6;
    nilai_cf_akhir = Math.abs(Math.max(cf_rules_kecakapan, cf_temp_kepribadian, cf_temp_wawancara) * rules_seleksi);
    console.log(nilai_cf_akhir);
    hasil_seleksi = "Tidak Lulus";
    swal("Mohon Maaf Kamu Belum Lulus", `dengan nilai kepercayaan ${nilai_cf_akhir}`, "error");
  }
}
// wawancara();
// async function show() {
//   let a = await wawancara();
//   console.log(obj_temp);
// }
// show();
