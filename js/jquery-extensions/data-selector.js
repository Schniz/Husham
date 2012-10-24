$.fn.filterByData = function(data) {
    return ($(this).filter(function() {
            if(data == null) {
                return true;
            } else {
                for (var name in data) {
                    if ($(this).data(name) != null && $(this).data(name) != data[name]) {
                        return false;
                    }
                }
                
                return true;
            }
        }));
}
