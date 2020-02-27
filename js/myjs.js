const date_picker_elements = document.querySelector('.date-picker');
const selected_date_elements = document.querySelector('.date-picker .selected-date');
const dates_elements = document.querySelector('.date-picker .dates');
const mth_elements = document.querySelector('.date-picker .dates .month .mth');
const next_mth_elements = document.querySelector('.date-picker .dates .month .next-mth');
const prev_mth_elements = document.querySelector('.date-picker .dates .month .prev-mth');
const days_elements = document.querySelector('.date-picker .dates .days');

const months = ['January', 'February', 'Maret', 'April', 'Mei', 'Juni', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

let date = new Date();
let day = date.getDate();
let month = date.getMonth();
let year = date.getFullYear();

let selectedDate = date;
let selectedDay = day;
let selectedMonth = month;
let selectedYear = year;

mth_elements.textContent = months[month] + ' ' + year;

selected_date_elements.textContent = formatDate(date);

populateDates();

//events listener
date_picker_elements.addEventListener('click', toggleDatePicker);
next_mth_elements.addEventListener('click', goToNextMonth);
prev_mth_elements.addEventListener('click', goToPrevMonth);

//function
function toggleDatePicker (e){
	if (!checkEventPathForClass(e.path, 'dates')) {
		dates_elements.classList.toggle('active');
	}
}


function goToNextMonth (e){
	month++;
	if (month > 11){
		month = 0;
		year++;
	}
	mth_elements.textContent = months[month] + ' ' + year;
	populateDates();
}

function goToPrevMonth (e){
	month--;
	if (month < 0){
		month = 11;
		year--;
	}
	mth_elements.textContent = months[month] + ' ' + year;
	populateDates();
}

function populateDates (e){
	days_elements.innerHTML = '';
	let amount_days = 31;

	if (month == 1){
		amount_days = 28;
	}

	for (let i = 0; i < amount_days; i++){
		const day_elements = document.createElement('div');
		day_elements.classList.add('day');
		day_elements.textContent = i + 1;

		if (selectedDay == (i + 1) && selectedYear == year && selectedMonth == month){
			day_elements.classList.add('selected');
		}

		day_elements.addEventListener('click', function (){
			selectedDate = new Date(year + '-' + (month + 1) + '-' + (i + 1));
			selectedDay = (i + 1);
			selectedMonth = month;
			selectedYear = year;

			selected_date_elements.textContent = formatDate(selectedDate);
			selected_date_elements.dataset.value = selectedDate;

			populateDates();
		});

		days_elements.appendChild(day_elements);
	}
}

//helper function
function checkEventPathForClass (path, selector){
	for (let i = 0; i < path.length; i++){
		if (path[i].classList && path[i].classList.contains(selector)){
			return true;
		}
	}

	return false;
}

function formatDate (d){
	let day = d.getDate();
	if (day < 10){
		day = '0' + day;
	}

	let month = d.getMonth() + 1;
	if (month < 10){
		month = '0' + month;
	}

	let year = d.getFullYear();

	return day + ' / ' + month + ' / ' + year;
}