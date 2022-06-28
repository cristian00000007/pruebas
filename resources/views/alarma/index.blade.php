
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Clock</title>
</head>
<body style="text-align: left;">
    <nav aria-label="breadcrumb" class="main-breadcrumb" style="background: white; width:450%;position: relative;
    top: -50px; left: -500px; list-style: none;">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../public" style="text-decoration: none;">Inicio </a></li>
          <li class="breadcrumb-item active" aria-current="page">Alarmas</li>
        </ol>
      </nav>
    <section class="container">
        <div class="time-display">
            <img class="timer" src="{{ asset('images/clock.png') }}">
            <div id="clock"></div>
        </div>
        <form class="setAlarm">
        <label class="alarm-heading"><h3>Establecer alarmas</h3><label><br>
        <div class="set-alarm-field">
            <input type="number" name="a_hour" id="a_hour" placeholder="HH" max="23" min="00">
            <input type="number" name="a_min" id="a_min" placeholder="MM" max="59" min="00">
            <input type="number" name="a_sec" id="a_sec" placeholder="SS" max="59" min="00">
            <input type="text" name="textt" id="textt" placeholder="texto">
        </div>
            <div class="controls">
                <button type="submit" class="set-alarm">Establecer alarma</button>
                <button type="reset" onclick="clearAlarm()" class="clear-alarm">Parar alarma</button>
            </div>
        </form>
    </section>
    <hr style="margin-top: 20px">

    <section>
        <div>
            <h3 class="alarm-heading" style="margin-top: -20px;">Lista de alarmas</h3>
        </div>
        <div>
            <ul id = "myList">

            </ul>
        </div>
    </section>
    <script>
        const display = document.getElementById('clock');


// set audio for alarm
const audio = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3');
audio.loop = true;


let alarmTime = null;
let alarmTimeout = null;


const myList = document.querySelector('#myList');
const addAlarm = document.querySelector('.setAlarm')


const alarmList = [];  // Stores all the alarms being set
// let count =1;

const text = addAlarm.textt.value;
document.write(text);

// Plays the alarm audio at correct time
function ringing(now,text){
    audio.play();
    alert(`${text} ${now}`)
}


// updates time every second
function updateTime() {
    var today = new Date();
    const hour = formatTime(today.getHours());
    const minutes = formatTime(today.getMinutes());
    const seconds = formatTime(today.getSeconds());
    const now = `${hour}:${minutes}:${seconds}`;

    display.innerText=`${hour}:${minutes}:${seconds}`;

//     check if the alarmList includes the current time , "now"
//     if yes, ringing() is called
    if(alarmList.includes(now) ){
        ringing(now);
    }
}


// set the correct format of time
// converts "1:2:3" to "01:02:03"
function formatTime(time) {
    if ( time < 10 && time.length != 2) {
        return '0' + time;
    }
    return time;
}


// function to clear/stop the currently playing alarm
function clearAlarm() {
    audio.pause();
    if (alarmTimeout) {
        clearTimeout(alarmTimeout);
        alert('Alarm cleared');
    }
}


// removes an alarm from the unordered list and the webpage when "Delete Alarm" is clicked
myList.addEventListener('click', e=> {
    console.log("removing element")
    if(e.target.classList.contains("deleteAlarm")){
        e.target.parentElement.remove();
    }
})


// removes an alarm from the array when "Delete Alarm" is clicked
remove = (value) => {
    let newList = alarmList.filter((time) => time != value);
    alarmList.length = 0;                  // Clear contents
    alarmList.push.apply(alarmList, newList);

    console.log("newList", newList);
    console.log("alarmList", alarmList);
}


// Adds newAlarm to the unordered list as a new list item on webpage
function showNewAlarm(newAlarm){
    const html =`
    <li class = "time-list">
        <span class="time">${newAlarm}</span>
        <button class="deleteAlarm time-control" id="delete-button" onclick = "remove(this.value)" value=${newAlarm}>Delete Alarm</button>
    </li>`
    myList.innerHTML += html
};


// event to set a new alarm whenever the form is submitted
addAlarm.addEventListener('submit', e=> {
    e.preventDefault();
    // const newAlarm = addAlarm.alarmTime.value;
    let new_h=formatTime(addAlarm.a_hour.value);
    if(new_h === '0'){
        new_h = '00'
    }
    let new_m=formatTime(addAlarm.a_min.value);
    if(new_m === '0'){
        new_m = '00'
    }
    let new_s=formatTime(addAlarm.a_sec.value);
    if(new_s === '0'){
        new_s = '00'
    }

    const newAlarm = `${new_h}:${new_m}:${new_s}`

//     add newAlarm to alarmList
    if(isNaN(newAlarm)){
        if(!alarmList.includes(newAlarm)){
            alarmList.push(newAlarm);
            console.log(alarmList);
            console.log(alarmList.length);
            showNewAlarm(newAlarm);
            addAlarm.reset();
        } else{
            alert(`Alarm for ${newAlarm} already set.`);
        }
    } else{
        alert("Invalid Time Entered")
    }
})


// calls updateTime() every second
setInterval(updateTime, 1000);
    </script>

    <style type="text/css">
    html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

body{
    background-color: #2F769C;
    margin-top: 5%;
    margin-left: 40%;
    font-family: 'Times New Roman', Times, serif;
     margin-right: 40%;
    /* align-items: center; */
}

.container{
    align-content: center;
    text-align: center;
}

.time-display{
    display: flex;
    flex-direction: row;
    align-content: center;
    background-color: white;
    width: 230px;
    height: 10%;
    border-radius: 4px;
    padding-left: 5px;
    padding-right: 5px;
    margin-left: 35px;

}


.timer{
    width: 40px;
    height: 40px;
    margin-top: 7px;
    margin-right: 10px;
}

#clock{
    font-size: 3rem;
    font-weight: bold;
    color: black;

}

.alarm-heading{
    color: whitesmoke;
    margin-bottom: 20px;
    padding-top: 50px;
}

.set-alarm-field{
    margin-top: -20px;
    height: 40px;
    /* background-color: yellowgreen; */
    padding: 5%;
}

.set-alarm-field input{
    padding: 5px;
}

.controls{

    margin-top: 10%;
}
.controls button{
    background-color: #204b74;
    color: whitesmoke;
    width: auto;
    height: 50px;
    border-radius: 5px;
    font-size: 0.8rem;
    font-weight:500;
}

.controls button:hover{
    background-color: #1A3462;
}

#myList{
    list-style-type: none;

}

#myList li{
    font-size: 1.2rem;
    color: whitesmoke;
    background-color: #204b74;
    height: 2rem;
    margin-left: -30px;
    border-radius: 4px;
    padding-left: 16px;
    padding-top: 10px;
    width: 280px;
    margin-bottom: 10px;

}

.time-list{
    display: flex;
    flex-direction: row;
}


.time-list span{
    /* background-color: violet; */
    width: 160px;
    margin-right: 18px;

}

.time-list button{
    background-color: #5d759d;
    border-color: #5d759d;
    border-radius: 3px;
    border-width: 0px;
    height: 22px;
    color: whitesmoke;

}
.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}
nav {
    display: block;
}
.breadcrumb-item.active {
    color: #6c757d;
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/";
}

li {
    text-align: -webkit-match-parent;
}

a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}




    </style>
</body>
</html>

