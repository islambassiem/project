function processPhase1(){
  document.getElementById('phase1').style.display = "none";
  document.getElementById('phase2').style.display = "flex";
}


function processPhase2(){
  document.getElementById('phase2').style.display = "none";
  document.getElementById('phase3').style.display = "flex";
}

function addRow(id, code, hours){
  let table = document.getElementById('addTrans');
  let row = table.insertRow();
  row.id = id;
  let c1 = row.insertCell(0);
  let c2 = row.insertCell(1);
  let c3 = row.insertCell(2);
  let c4 = row.insertCell(3);
  let totalHours = document.getElementById('totalHours');
  document.getElementById('empty').style.display = "none";
  c1.innerHTML = `<input type="hidden" value="${id}" name="subject_id[]"> ${id}`;
  c2.innerText = code;
  c3.innerText = hours;
  c4.innerHTML = `<button class="btn btn-danger py-0" id="btnDelete" data-id=${id} data-hours=${hours}><i class="fa-solid fa-trash-can" id="iDelete" data-id=${id} data-hours=${hours}></i> Delete</button>`;
  totalHours.innerText = parseInt(totalHours.innerText) + parseInt(hours);
}

document.addEventListener("click", function (e){
  if(e.target.id == 'btnAdd' || e.target.id == 'iAdd'){
    var id     = e.target.getAttribute('data-id');
    var code   = e.target.getAttribute('data-code');
    var hours  = e.target.getAttribute('data-hours');
    addRow(id, code, hours);
  }
  if(e.target.id == 'btnDelete' || e.target.id == 'iDelete'){
    document.getElementById(e.target.getAttribute('data-id')).remove();
    let hours = e.target.getAttribute('data-hours')
    let totalHours = document.getElementById('totalHours');
    totalHours.innerText = parseInt(totalHours.innerText) - parseInt(hours);
  }
});
