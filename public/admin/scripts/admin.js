/**
 * @desc load modal 
 * @param string content
 * @author duy.ngo
 */
function loadModal(content){
	var html = '<div id="loadModal" class="modal fade" role="dialog">';
	html += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="close">x</button>';
	html += '<center style="padding: 10px;">'+content+'</center></div>'; 
	$('#loadModal').remove();
	$('body').append(html);
	$('#loadModal').modal();
}