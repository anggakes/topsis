
function LoopObj(value,id,id_table)
{
	var tex='<tr id="'+id+'">';                   // Create element with HTML
    for (var ax in value) 
    {
        tex=tex+"<td><input name='"+value[ax].name+"' type='"+value[ax].type+"' placeholder='"+value[ax].placeholder+"' ></td>"; 
    }
	tex=tex+'<td style="width:70px"><a href=""  id=\"'+id+'\"  onclick="delete_row(event,this,\''+id_table+'\')">&nbsp; Hapus  </a></td></tr>';
	return tex;
}

function LoopObjCreate(value,id,id_table)
{
	var tex='<tr id="'+id+'">';                   // Create element with HTML
    for (var ax in value) 
    {
        tex=tex+"<td><input name='"+value[ax].name+"' value='"+value[ax].value+"' type='"+value[ax].type+"' placeholder='"+value[ax].placeholder+"' ></td>"; 
    }
	tex=tex+'<td style="width:70px"><a href="" id=\"'+id+'\" onclick="delete_row(event,this,\''+id_table+'\')">&nbsp; Hapus  </a></td></tr>';
	return tex;
}

function add_row(container,e,id,id_table)
{		
	$("#"+container).append(LoopObjCreate(e,id,id_table));     
	
	     // Insert new elements after detailpakai
}
function delete_row(e,r ,id_table)
{	
	e.preventDefault();
	var i = r.parentNode.parentNode.rowIndex;
	

	if($("tr#"+r.id).length >1)
	{
		document.getElementById(id_table).deleteRow(i);
		
	}
	else{
		alert('Data tidak boleh kosong sama sekali!');
	}
}
function create_row(id, field, str){
	var but= '<button class="button small pull-right" type="button" value="Add" onclick="add_row(\'detail_pakai'+str+'\','+str+''+",'detailpakai"+str+"','detailpemakaian"+str+'\')">Tambah + </button>';
	var tab= but+'<br><table id="detailpemakaian'+str+'" class="detailpemakaian'+str+' table" cellspacing="0" cellpadding="0" style="margin-top:20px"   width="1000"> \
			<tr style="background:#c0c0c0"><td>Jabatan</td><td>Instansi</td><td>Tanggal Masuk</td><td>Tanggal Keluar</td></tr>\
			<tbody id="detail_pakai'+str+'"> \
			<tr id="detailpakai'+str+'"></tr> \
			</tbody>\
		</table>';
		$('#'+id).html(tab);
		$('#detail_pakai'+str).html(LoopObjCreate(field,'detailpakai'+str,'detailpemakaian'+str));
		
}

function insert_row(id, field, str){
	var but= '<button class="button small pull-right" type="button" value="Add" onclick="add_row(\'detail_pakai'+str+'\','+str+''+",'detailpakai"+str+"','detailpemakaian"+str+'\')">Tambah + </button>';
	var tab= but+'<br><table id="detailpemakaian'+str+'" class="detailpemakaian'+str+' table" cellspacing="0" cellpadding="0" style="margin-top:20px"   width="1000"> \
			<tr style="background:#c0c0c0"><td>Jabatan</td><td>Instansi</td><td>Tanggal Masuk</td><td>Tanggal Keluar</td><td></td></tr>\
			<tbody id="detail_pakai'+str+'"> \
			<tr id="detailpakai'+str+'"></tr> \
			</tbody>\
		</table>';
		$('#'+id).html(tab);

		var i = 1;
		for (var ui in field) 
	    {	console.log(field[ui]);
	    	if(i == 1){
	    	$('#detail_pakai'+str).html(LoopObjCreate(field[ui],'detailpakai'+str,'detailpemakaian'+str));	
	    	}else{
	    	$('#detail_pakai'+str).append(LoopObjCreate(field[ui],'detailpakai'+str,'detailpemakaian'+str));  
	    	}
	    	i++;
	    }
}

/*
$(document).ready(function()
{
	create_row('isa', field);
});
*/