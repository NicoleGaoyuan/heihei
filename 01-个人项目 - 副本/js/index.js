(function () {
    function Index() {
        this.init();
    }
    Index.prototype = {
        constructor: Index,
        init: function () {
            // this.onIndex();
            this.login();
        },
        onIndex: function () {
            $.post('json/index.json', function (jsonData) {
                var jsonObj = typeof jsonData == 'object' ? jsonData : eval('(' + jsonData + ')');
                var jsonArr = jsonObj.items;
                console.log(jsonArr)
                $.each(jsonArr, function (index, item) {
                    // console.log(item);
                    $.post('php/inster.php', item, function (data) {
                        if (parseInt(data)) {
                            console.log('数据插入成功');
                        } else {
                            console.log('数据插入失败');
                        }
                    });
                })
            })
        }
    }
    var Index = new Index();
}())