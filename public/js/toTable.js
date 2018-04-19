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


