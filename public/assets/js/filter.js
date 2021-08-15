
$(document).ready(function () {

    $(document).on('click', '.filter_checkbox', function () {
        cekCheckbox();
    });
    $(document).on('click', '.filter_checkbox_worker', function () {
        cekCheckboxWorker();
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

    if (counter == 0) {
        $('.causes_div').empty();
    } else {
        fetchCauseAgainstCategory(ids);
    }
}


function fetchCauseAgainstCategory(id) {
    $('.causes_div').empty();

    $.ajax({
        type: 'GET',
        url: '/project/projectFilterResult/' + id,
        success: function (response) {
            var response = JSON.parse(response);

            console.log(response);

            response.forEach(element => {

                $('.causes_div').append(`
                                        
                <article class="entryprojectview">
                <h2 class="entry-title"><i class="bi bi-house-door"></i>
                  <a href="blog-single.html">${element.title}</a>
                </h2>
                
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-cash-coin"></i> 
                    <a href="blog-single.html">Rp.${element.budget_range_min}-Rp.${element.budget_range_max}</a></li>
                  </ul>
                </div>
                
                <div class="entry-content">
                  <p>${element.description}</p>
                  <div class="read-more">
                  <a href="/ProjectViewDetail/${element.project_id}">Bid now</a>
                  </div>
                </div>
                
                </article>            
                    `);
            });

        },
        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });
}

function cekCheckboxWorker() {
    var ids = [];
    console.log('1');
    var counter = 0;
    $('.filter_checkbox_worker').each(function () {
        if ($(this).is(":checked")) {
            ids.push($(this).attr('id'));
            counter++;
        }
    });

    if (counter == 0) {
        $('.causes_div_worker').empty();
    } else {
    console.log(ids);
        fetchCauseAgainstCategoryworker(ids);
    }
}

function fetchCauseAgainstCategoryWorker(id) {
    $('.causes_div_worker').empty();
    console.log('3');

    $.ajax({
        type: 'GET',
        url: '/worker/workerFilterResult/' + id,
        success: function (response) {
            var response = JSON.parse(response);
            console.log(response);

            response.forEach(element => {
                $('.causes_div_worker').append(`
                                        
                <article class="entryprojectview">

                <h2 class="entry-title"><i class="bi bi-house-door"></i>
                  <a href="blog-single.html">${element.user.username}</a>
                </h2>
                
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-cash-coin"></i> 
                    <a href="blog-single.html">Kisaran biaya Rp.${element.price_range}</a></li>
                  </ul>
                </div>
                
                <div class="entry-content">
                  <p>${element.description}</p>
                  <div class="read-more">
                  <a href="/WorkerViewDetail/${element.worker_id}">Lihat Detail</a>
                  </div>
                </div>
                
                </article>            
                    `);
            });

        },
        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });
}
