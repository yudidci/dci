
$('#search-text').on('keyup', function (e) {
    if (e.keyCode == 13) {
        searchMovies();
    }
})

$('#btn-search').on('click', function (e) {
    searchMovies();
    $(".nikKota").css("display", "block");
})

$('#btn-camat').on('click', function (e) {
    searchCamat();
    $(".nikCamat").css("display", "block");
})

//Lurah
$('#btn-lurah').on('click', function (e) {
    searchLurah();
    $(".nikLurah").css("display", "block");
})
//RW
$('#btn-RW').on('click', function (e) {
    searchRW();
    $(".nikRW").css("display", "block");
})

//RT
$('#btn-RT').on('click', function (e) {
    searchRT();
    $(".nikRT").css("display", "block");
})

//Warga
$('#btn-warga').on('click', function (e) {
    searchWarga();
    $(".nikWarga").css("display", "block");
})
$('#btn-tingkatan').on('click', function (e) {
    searchTingkatan();
    $(".nikTingkatan").css("display", "block");
})

//filter
$('#btn-detail').on('click', function (e) {
    filterList();
    $(".filterList").css("display", "block");
})
//follower
$('#btn-follower').on('click', function (e) {
    followerList();
    $(".followerList").css("display", "block");
})
//search nik kota

function searchMovies() {

    
   
    $.ajax({
        url: 'http://localhost:3001/user/list',
        type: 'GET',
        dataType: 'json',
        data: {
        },
        success: function (result) {
            let movies = result.result;
            $('#movie-list').html('');
            $("#movie-list").append(
                "\
                    <div class='nikKota'><h1>NIK Detail</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                             <th><center>Action</center></th>\
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".nikKota").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.nikKota').find("tbody").append(`
                 

                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        <td><center> <button onclick="javascript:invokeService()">Detail</button>| <button>Delete</button></td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#movie-list').append(`
                    <div class="col-sm-12 text-center">
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}

//nik camat

function searchCamat() {
    $.ajax({
        url: 'http://localhost:3001/user/listCamat',
        type: 'GET',
        dataType: 'json',
        data: {
        },
        success: function (result) {
            let movies = result.result;
            $('#movie-list').html('');
            $("#movie-list").append(
                "<div class='nikCamat'><h1>NIK Detail</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                             <th><center>Action</center></th>\
                             \
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".nikCamat").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.nikCamat').find("tbody").append(`
                 
     
                        
                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        <td><center> <button >Detail</button> | <button>Delete</button></td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#camat-list').append(`
                    <div class="col-sm-12 text-center">
                        <p>Data Not found!</p>
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}
// Lurah

function searchLurah() {
    $.ajax({
        url: 'http://localhost:3001/user/listLurah',
        type: 'GET',
        dataType: 'json',
        data: {
        },
        success: function (result) {
            let movies = result.result;
            $('#movie-list').html('');
            $("#movie-list").append(
                "<div class='nikLurah'><h1>NIK Detail</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                             <th><center>Action</center></th>\
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".nikLurah").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.nikLurah').find("tbody").append(`
                 
     
                        
                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        <td><center> <button>Detail</button> | <button>Delete</button></td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#lurah-list').append(`
                    <div class="col-sm-12 text-center">
                        <p>Data Not found!</p>
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}
// RW

function searchRW() {
    $.ajax({
        url: 'http://localhost:3001/user/listRW',
        type: 'GET',
        dataType: 'json',
        data: {
        },
        success: function (result) {
            let movies = result.result;
            $('#movie-list').html('');
            $("#movie-list").append(
                "<div class='nikRW'><h1>NIK Detail</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                             <th><center>Action</center></th>\
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".nikRW").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.nikRW').find("tbody").append(`
                 
     
                        
                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        <td><center> <button>Detail</button> | <button>Delete</button></td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#RW-list').append(`
                    <div class="col-sm-12 text-center">
                        <p>Data Not found!</p>
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}
// RT

function searchRT() {
    $.ajax({
        url: 'http://localhost:3001/user/listRT',
        type: 'GET',
        dataType: 'json',
        data: {
        },
        success: function (result) {
            let movies = result.result;
            $('#movie-list').html('');
            $("#movie-list").append(
                "<div class='nikRT'><h1>NIK Detail</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                             <th><center>Action</center></th>\
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".nikRT").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.nikRT').find("tbody").append(`
                 
     
                        
                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        <td><center> <button>Detail</button> | <button>Delete</button></td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#RT-list').append(`
                    <div class="col-sm-12 text-center">
                        <p>Data Not found!</p>
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}
// Warga

function searchWarga() {
    $.ajax({
        url: 'http://localhost:3001/user/listWarga',
        type: 'GET',
        dataType: 'json',
        data: {
        },
        success: function (result) {
            let movies = result.result;
            $('#movie-list').html('');
            $("#movie-list").append(
                "<div class='nikWarga'><h1>NIK Detail</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                             <th><center>Action</center></th>\
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".nikWarga").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.nikWarga').find("tbody").append(`
                 
     
                        
                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        <td><center> <button>Detail</button> | <button>Delete</button></td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#warga-list').append(`
                    <div class="col-sm-12 text-center">
                        <p>Data Not found!</p>
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}

//tingkatan list
function searchTingkatan() {
    $.ajax({
        url: 'http://localhost:3001/user/followers',
        type: 'GET',
        dataType: 'json',
        data: {
            // 'NIK' : $('#search-text').val() //Parameter s pencarian film berdasarkan judul
        },
        success: function (result) {
            let movies = result.result;
            $('#tingkatan-list').html('');
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('#tingkatan-list').append(`<div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                 
                        <h1>Member Detail</h1>
                        <table style="width:250%" >
                        <tr>
                        <th><center><class="card-text">Leader </center></th>
                        <th><center><class="card-text">Follower</center></th>
                        </tr>
                        <tr>
                        <td><class="card"><center>`+ data.leader + `</center></td>
                        <td><class="card"><center>`+ data.follower + `</center></td>
                        </tr>
                        </table>
                        </div></div></div>
                    `);
                })
            } else {
                $('#tingkatan-list').append(`
                    <div class="col-sm-12 text-center">
                        <h1>`+ result.Error + `</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}

//filter
function filterList() {
    $.ajax({
        url: 'http://localhost:3001/user/filter',
        type: 'GET',
        dataType: 'json',
        data: {
            'bb' : $('#search-text').val(),
            'ba' : $('#search-text2').val()
        },
        success: function (result) {
            let movies = result.result;
            $('#filter-list').html('');
            $("#filter-list").append(
                "<div class='filterList'><h1>NIK Detail</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                            \
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".filterList").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.filterList').find("tbody").append(`
                 
     
                        
                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#filter-list').append(`
                    <div class="col-sm-12 text-center">
                        <p>Data Not found!</p>
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}

//follower
function followerList() {
    $.ajax({
        url: 'http://localhost:3001/user/follower',
        type: 'GET',
        dataType: 'json',
        data: {
            'ref' : $('#search-text3').val()
        },
        success: function (result) {
            let movies = result.result;
            $('#follower-list').html('');
            $("#follower-list").append(
                "<div class='followerList'><h1>List Followers</h1>\
                    <table>\
                        <thead>\
                            <tr>\
                           \
                             <th><center>Registration Number</center></th>\
                             <th><center>Name</center></th>\
                             <th><center>NIK</center></th>\
                             <th><center>Followers</center></th>\
                            \
                            </tr>\
                        </thead>\
                        <tbody>\
                        \
                        </tbody >\
                    </table >\
                </div > "
            )
            $(".followerList").css("display","block")
            if (result.status = 200) {
                $.each(movies, function (i, data) {
                    $('.followerList').find("tbody").append(`
                 
     
                        
                        <tr>
                        
                        <td><center>`+ data.reg_no + `</td></center>
                        <td><center>`+ data.name + `</td></center>
                        <td><center>`+ data.nik + `</td></center>
                        <td><center>`+ data.followers_count + `</td></center>
                        </tr>
                  

                    `);
                })
            } else {
                $('#follower-list').append(`
                    <div class="col-sm-12 text-center">
                        <p>Data Not found!</p>
                        <h1>Data Not Found</h1>
                    </div>
                `);
            }
        }
    });

    $('#search-text').val("");
}