
$(document).ready(function () {

    $(document).on('click', '.filter_checkbox', function () {
        cekCheckbox();
    });

});


function cekCheckbox() {
    var ids = [];

    var counter = 0;
    $('.filter_checkbox').each(function () {
        if ($(this).is(":checked")) {
            ids.push($(this).attr('id'));
            counter++;
        }
    });

    console.log(ids);

    if (counter == 0) {
        $('.causes_div').empty();
    } else {
        fetchCauseAgainstCategory(ids);
    }
}

function fetchCauseAgainstCategory(id) {
    $('.result_div').empty();
    
    $.ajax({
        type: 'GET',
        url: '/project/projectFilterResult/' + id,
        success: function (response) {
            var response = JSON.parse(response);

            console.log(response);

            response.forEach(element => {
                $('.causes_div').append(`
                    
                                        <div class="col-lg-8">
                                            <h5 class="card-title">${element.title}</h5>
                                            <p class="card-text">${element.description}</p>
                                        </div>
                                        <div class="col-lg-4 ">
                                                <h5 class="float-right">Rp. ${element.budget_range_min} -
                                                    Rp. ${element.budget_max}</h5>
                                                    <a href="#" class="btn btn-primary">Lihat</a>
                                            </div>
                                        </div>                   
                    `);
            });

        },
        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });
}
