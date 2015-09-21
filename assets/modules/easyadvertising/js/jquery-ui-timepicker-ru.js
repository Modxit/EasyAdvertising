/* Italian initialisation for the jQuery UI date picker plugin. */
2	/* Written by Antonello Pasella (antonello.pasella@gmail.com). */
3	jQuery(function($){
4	        $.datepicker.regional['it'] = {
5	                closeText: 'Chiudi',
6	                prevText: '&#x3c;Prec',
7	                nextText: 'Succ&#x3e;',
8	                currentText: 'Oggi',
9	                monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno',
10	                        'Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
11	                monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu',
12	                        'Lug','Ago','Set','Ott','Nov','Dic'],
13	                dayNames: ['Domenica','Luned&#236','Marted&#236','Mercoled&#236','Gioved&#236','Venerd&#236','Sabato'],
14	                dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'],
15	                dayNamesMin: ['Do','Lu','Ma','Me','Gi','Ve','Sa'],
16	                weekHeader: 'Sm',
17	                dateFormat: 'dd/mm/yy',
18	                firstDay: 1,
19	                isRTL: false,
20	                showMonthAfterYear: false,
21	                yearSuffix: ''};
22	        $.datepicker.setDefaults($.datepicker.regional['it']);
23	});
	
	$.datepicker.setDefaults($.datepicker.regional['it']);
	
	$.timepicker.regional['it'] = {
		timeOnlyTitle: 'Scegli ora',
		timeText: 'tempo',
		hourText: 'ora',
		minuteText: 'minuti',
		secondText: 'secondi',
		millisecText: 'millisecondi',
		currentText: 'attuale',
		closeText: 'chiudi',
		ampm: false
	};
	$.timepicker.setDefaults($.timepicker.regional['it']);
});
