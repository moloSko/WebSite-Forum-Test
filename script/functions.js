function addQuestion() {
  if (true) {
    var newdiv = document.createElement("div");
    newdiv.innerHTML = "<div class='relev_poz'>\n<label class='neobh_razd' data-tooltip='Обязательно для заполнения'>*</label><label for='use_reazd_name'>Загрузите изображение в формате png размером не более 33px на 33px:</label>\n<input class='img_form_decor' type='file' name='file' multiple accept='.png'/>\n</div>\n<div class='relev_poz'>\n<label class='neobh_razd' data-tooltip='Обязательно для заполнения'>*</label>\n<label for='use_reazd_name'>Введите название подраздела:</label>\n<input class='form_decorate' type='text' id='podrazd_name' name='podrazdel_name' />\n</div>";
     document.getElementById("parentId").appendChild(newdiv);
     return false;}
}
/*-------------------------------*/
function creadQuestion(){
  window.reload();
}
/*-------------------------------*/
