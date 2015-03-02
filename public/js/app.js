$(function() {

    $('#side-menu').metisMenu();
    $('#customer-table').DataTable({
        ordering:  false
    });
    $('#dogbreeds-table').DataTable({
        ordering:  false
    });
    $('#catbreeds-table').DataTable({
        ordering:  false
    });
    $('#healthquestions-table').DataTable({
        ordering:  false
    });
    $('#catquestions-table').DataTable({
        ordering:  false
    });
    $('#physician-table').DataTable({
        ordering:  false
    });
    $('#treatment_list').DataTable({
        "dom": 'ftp',
        ordering:  false,
        pageLength: 5,
        paging: true,
        info: false
    });
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse')
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse')
        }

        height = (this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    })

})

$(document).ready(function() {
    // initiate layout and plugins
    Metronic.init(); // init metronic core components
});
