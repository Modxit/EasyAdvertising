<?php
if (!function_exists('out')) {
	function out($arr) {
		
		foreach ($arr as $k=>$v) 
			${$k} = $v;
		
		$out = '
			<table width="650px" border="0" cellspacing="0" cellpadding="0"><tr>
				<td width="325px">Priorità:<br /><input size="5" type="text" name="pos" value="'.$pos.'" /></td>
				<td>
					Area di visualizzazione (zona):
					<span class="dright"><input type="checkbox" name="published" '.$checked.' class="pub">Attivo</span><br />
					<input size="20" type="text" name="area" value="'.$area.'" />
				</td>
			</tr></table>
			
			<table class="top" width="650px" border="0" cellspacing="0" cellpadding="0"> 
			<tr><td>Template URL:<br />
			(ogni template su una nuova riga)<br />
			<textarea name="template">'.$template.'</textarea></td>
			<td>Escludi Template URL:<br />
			(ogni modello su una nuova riga)<br />
			<textarea name="ex_template">'.$ex_template.'</textarea></td></tr>
			</table><br />
			descrizione:<br /><input class="long" type="text" name="description" value="'.$description.'" /><br />
			link:<br /><input class="long" type="text" name="link" value="'.$link.'" /><br />
			File o Codice html:<br />
			
			<div id="mhelp-cont">Al posto del file puoi inserire codice html..<br />NB: puoi inserire normalmente un link <b>&lt;a href="..."&gt;...&lt;/a&gt;</b>,<br />ma per poter sfruttare  il campo <b>"link"</b> del modulo <br />Sostituire il tag html del link rispettivamente, con <br /><b>[+link_start+]</b> (per l\'apertura) and <b>[+link_finish+]</b> (per la chiusura del tag).</div>
			
			<textarea class="longimg" name="content" id="ef-img">'.$content.'</textarea><button id="ef-link">Choose</button><button id="mhelp">help</button>
			<div id="ef-ef"></div><div id="eadvt_preview"></div><br />
			
			<table width="650px" border="0" cellspacing="0" cellpadding="0"> 
			<tr>
			<td width="325px">
			Inizio campagna adv:<br />
			<input id="pub_date" name="pub_date" class="DatePicker" value="'.$pub_date.'" /></td><td>
			Fine campagna adv:<br />
			<input id="unpub_date" name="unpub_date" class="DatePicker" value="'.$unpub_date.'" /></td>
			</tr>
			</table>
			
			<table class="top" width="650px" border="0" cellspacing="0" cellpadding="0"> 
			<tr>
				<td width="325">
					Impression :<br />
					<input type="checkbox" name="counted" '.$checkedcount.' value="1" /> Impression  attuali<br />
					<input type="text" name="count_view" value="'.$count_view.'" /><br />
					Limite Impression max (0 - infinito): <br /><input type="text" name="total_view" value="'.$total_view.'" />
				</td>
			
				<td>
					Clicks:<br />
					<input type="checkbox" name="jump_counted" '.$jump_counted.' value="1" /> Click attuali<br />
					<input type="text" name="jump_count" value="'.$jump_count.'" /><br />
					Limite Clicks max (0 - infinito): <br /><input type="text" name="total_jump" value="'.$total_jump.'" />
				</td>
			</tr>
			</table>
			';
			
		return $out;	

	}
}	
	