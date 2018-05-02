/******************************************************************************/
/****   BOOSTRAP TABLE ****/
//http://ivanovdmitry.com/blog/post/feature-rich-data-table-plugin-for-bootstrap-432

$.fn.toTable = function (options) {

    function extend(a, b) {
        var key;
        for (key in b) {
            if (b.hasOwnProperty(key)) {
                a[key] = b[key];
            }
        }
        return a;
    }

    this.default = {
        data: [],
        search: 'true',
        showRefresh: 'true',
        //showToggle: 'true', 
        showColumns: 'true',
        //queryParams: 'queryParams',
        pagination: 'true',
        toolbar: 'true',
        pageList:  [10, 25, 50, 100] , 

        clickToSelect: 'true',
        /*ignoreClickToSelectOn: function (element) {
            return console.log(element);
        }*/
    }
    extend(this.default, options);

    $(this).bootstrapTable(this.default);
};

/*
* metodo publico debe invocarse
*/
$.toTableSelectRow = function(objetTrJQ, callback){
    var checkbox = getCheckbox (objetTrJQ);
    var selected = simpleClick(objetTrJQ, checkbox);
    return callback(selected);
}

/*
* metodo privado no debe invocarse
*/
function getCheckbox (objetTrJQ){
    var tds = objetTrJQ.find('td');
    var checkbox = undefined;
    $.each(tds, function(index, el) {
        var inputs = el.getElementsByTagName("input");
        if(el.getElementsByTagName("input").length > 0 ){
          for (var j = 0; j < inputs.length; j++) {
            if(inputs[j].getAttribute('data-accion') === 'click'){
              checkbox = inputs[j];
            }
          }
        }
    });
    return checkbox;
}

/*
* metodo privado no debe invocarse
*/
function simpleClick(rowJq, checkbox){
    var table = rowJq.closest("table"); 
    if (rowJq.hasClass('active')) {
        clearTableRowSelected(table);
        checkbox.checked = false;
        return false;
    } else {
        clearTableRowSelected(table);
        rowJq.addClass('active').addClass('info');
        checkbox.checked = true;
        return true;
    }
}

/*
* metodo privado no debe invocarse
*/
function clearTableRowSelected(table_jq){
    var list_check = table_jq.find("tbody tr");
    $.each(list_check, function (index, item) {
        $(item).removeClass('active').removeClass('info');
    });
}

/*
* metodo publico debe invocarse
* param rowJs, debe ser un objecto javascript
*/
$.toTableDeleteRow = function (rowJs){
   $(rowJs).remove();
    return false;
}


