var DashboardScripts = function () {
    var initTable = function (url='/get-data-for-table') {
        var table = $('#table-body');

        $.ajax({
            type: 'GET', // define the type of HTTP verb we want to use (POST for our form)
            url: url, // the url where we want to POST
            dataType: 'json', // what type of data do we expect back from the server
            encode: true,
            beforeSend: function(){
                App.blockUI({
                    target: '#table-container',
                    boxed: true,
                    message: 'Processing data, please wait...'
                });
            },
            complete: function(){
                App.unblockUI('#table-container');
            },
            success: function (result) {
                var append = "";
                $.each( result.data, function( key, value ) {
                    append += '<tr><td id="org_id" style="width:5%">' + value.org_id + '</td><td id="company-name">' + value.org_name + '</td><td id="company-email">' + value.org_bill_email + '</td><td id="migrate-date">' + value.date_execute + '</td><td id="migrate-last-state">' + value.orgmigrate_laststate + '</td><td id="migrate-message">' + value.orgmigrate_message + '</td><td id="migrate-action"><button type="button" id="button-detail" data-company-id="' + value.org_id + '" class="btn btn-circle btn-default"><i class="fa fa-eye"></i> Detail</button><button type="button" id="button-history" data-company-id="' + value.org_id + '" class="btn btn-circle btn-default"><i class="fa fa-history"></i> History</button></td></tr>';
                    table.html(append);
                });

                var info = "<strong>Showing data " + result.from + " to " + result.to + " from total " + result.total + " data</strong> (Page " + result.current_page + " out of " + result.last_page + ")";
                $("#data-info").html(info); 
                initPaging(result);
            },
            error: function () {
               
            }
        });
    };

    var initPaging = function(params){
        $('#pagination').attr('data-current-page', params.current_page);
        $("#page-number").attr("value", params.current_page);
        $("#button-prev").attr('data-url', params.prev_page_url);
        $("#button-next").attr('data-url', params.next_page_url);

        if (params.current_page == 1){
            $("#button-prev").addClass("disabled");
        }else{
            $("#button-prev").removeClass("disabled");
        }
        
        if (params.current_page == params.last_page){
            $("#button-next").addClass("disabled");
        }else{
            $("#button-next").removeClass("disabled");
        }

        $('#pagination').show();
    };

    var handlePaging = function(){
        $("#button-prev, #button-next").click(function() {
            initTable($(this).attr('data-url'));
        });
    };

    var handleActionButton = function(){
        $(document).on('click', '#button-detail', function() {
            $.ajax({
                type: 'post', // define the type of HTTP verb we want to use (POST for our form)
                url: '/get-detail', // the url where we want to POST
                dataType: 'json', // what type of data do we expect back from the server
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    company_id: $(this).data('company-id')
                },
                encode: true,
                beforeSend: function(){
                    App.blockUI({boxed: true});
                },
                complete: function(){
                    App.unblockUI();
                },
                success: function (result) {
                    $("#detail-payload").html(result.message);
                    $("#modal-detail").modal('show');
                },
                error: function () {
                   
                }
            });
        });
    };


    return {
        //main function to initiate the module
        init: function () {
            initTable();
            handlePaging();
            handleActionButton();
        }

    };

}();

$(document).ready(function() {
    DashboardScripts.init();
});
