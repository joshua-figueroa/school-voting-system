$(document).ready(function() {
    function add(id, context) {
        document.getElementById(id).innerHTML += context;
    }

    function level(obj, g) {
        if(g == 7)
            obj.g7++
        else if(g == 8)
            obj.g8++
        else if(g == 9)
            obj.g9++
        else if(g == 10)
            obj.g10++
        else if(g == 11)
            obj.g11++
        else if(g == 12)
            obj.g12++
    }

    function num(id, n) {
        var res, msg = "Correspondent";
        if(n > 1)
            msg += 's'
        res = `Out of ${n} ${msg}`
        $(`#${id}`).html(res)
    }

    function count(id1, id2, categ) {
        $.ajax({
            url: 'http://localhost/voting_system/api/',
            dataType: 'json',
            success: function(data) {
                const length = data.length;
                var x = 0, y = 0, label1, label2, ctx
                var obj = {g7: 0, g8: 0, g9: 0, g10: 0, g11: 0, g12: 0}
                var obj2 = {g7: 0, g8: 0, g9: 0, g10: 0, g11: 0, g12: 0}
                num("count", length)
                if(categ == "anime") {
                    for(let i = 0; i < length; i++) {
                        if(data[i].anime == id1) {
                            x++
                            level(obj, data[i].level)
                        }   
                        else if(data[i].anime == id2) {
                            y++
                            level(obj2, data[i].level)
                        }
                    }
                    label1 = "Naruto"
                    label2 = "Sasuke"
                }
                else if(categ == "cc") {
                    for(let i = 0; i < length; i++) {
                        if(data[i].cc == id1) {
                            x++
                            level(obj, data[i].level)
                        }   
                        else if(data[i].cc == id2) {
                            y++
                            level(obj2, data[i].level)
                        }
                    }
                    label1 = "Visa"
                    label2 = "MasterCard"
                }
                add(id1, x);
                add(id2, y);
                ctx = $(`#${categ}-chart`)
                //Colored circle
                var c1 = `#${categ}-${id1}`
                var c2 = `#${categ}-${id2}`
                    
                if(x > y) {
                    $(c1).css("color", "#28a745")
                    $(c2).css("color", "#dc3545")
                } else if(x < y) {
                    $(c1).css("color", "#dc3545")
                    $(c2).css("color", "#28a745")
                } else {
                    $(c1).css("color", "#0d6efd")
                    $(c2).css("color", "#0d6efd")
                }

                //Bar graph
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10', 'Grade 11', 'Grade 12'],
                        datasets: [{
                            label: label1,
                            data: [obj.g7, obj.g8, obj.g9, obj.g10, obj.g11, obj.g12],
                            backgroundColor: [
                                '#BE61CAAB',
                                '#BE61CAAB',
                                '#BE61CAAB',
                                '#BE61CAAB',
                                '#BE61CAAB',
                                '#BE61CAAB'
                            ],
                            borderColor: [
                                '#BE61CA',
                                '#BE61CA',
                                '#BE61CA',
                                '#BE61CA',
                                '#BE61CA',
                                '#BE61CA'
                            ],
                            borderWidth: 1
                        }, {
                            label: label2,
                            data: [obj2.g7, obj2.g8, obj2.g9, obj2.g10, obj2.g11, obj2.g12],
                            backgroundColor: [
                                '#FFC154AB',
                                '#FFC154AB',
                                '#FFC154AB',
                                '#FFC154AB',
                                '#FFC154AB',
                                '#FFC154AB'
                            ],
                            borderColor: [
                                '#FFC154',
                                '#FFC154',
                                '#FFC154',
                                '#FFC154',
                                '#FFC154',
                                '#FFC154'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                })
            }
        });
    }

    count("naruto", "sasuke", "anime");
    count("visa", "mastercard", "cc");
});