<section>
  <div class="container">
    <div class="row">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
      <link rel="stylesheet" type="text/css" media="all" href="css_demo/daterangepicker.css" />
      <script type="text/javascript" src="js_demo/daterangepicker.js"></script>
      <div class="col-lg-12 caption mb-3 pb-3 pt-1">
        <h6 class="flight_icons_plane mt-3">
          <img class="mx-2" width="30" height="30" src="https://img.icons8.com/cute-clipart/30/suitcase.png" alt="suitcase" /> Travel
        </h6>
        <!--- search now -->
        <form method="post" class="mt-4" id="frmSubmit">
          <div class="row mt-4">
            <div class="col-lg-2 col-6 mb-2">
              <div class="form-group">
                <img width="23" height="23" src="https://img.icons8.com/ios/23/144383/marker--v1.png" alt="marker--v1" class="icons_search mx-2">
                <input type="text" class="form-control icons_search_input inputbox " name="destination"  placeholder="Drop Destination" ="off" />
              </div>
            </div>
            <div class="col-lg-2 col-6 mb-2">
              <img width="23" height="23" class="icons_search mx-2" src="https://img.icons8.com/external-others-phat-plus/23/144383/external-business-business-outline-others-phat-plus-15.png" alt="external-business-business-outline-others-phat-plus-15">
              <input id="depart" class="form-control icons_search_input click" name="travelDate" placeholder="Departing" ="off" />
            </div>

            <div class="col-lg-2 col-6 mb-2">
              <div class="form-group ">
                <img width="23" height="23" src="https://img.icons8.com/ios/23/144383/user--v1.png" class="icons_search mx-2" alt="user--v1">
                <input type="text" class="form-control icons_search_input inputbox " name="name"  placeholder="Your Full Name" required>
              </div>
            </div>
            <div class="col-lg-2 col-6 mb-2">
              <div class="form-group ">
              <img width="23" height="23" src="https://img.icons8.com/wired/23/144383/phone.png" alt="phone" class="icons_search mx-2">
                <input type="tel" class="form-control icons_search_input inputbox " name="phone"  placeholder="Phone Number" minlength="10" maxlength="10" size="10" required>
              </div>
            </div>
            <div class="col-lg-2 col-6 mb-2">
              <div class="form-group">
                <img width="23" height="23" class="icons_search mx-2" src="https://img.icons8.com/external-obvious-line-kerismaker/23/144383/external-business-office-stationery-line-obvious-line-kerismaker-42.png" alt="external-business-office-stationery-line-obvious-line-kerismaker-42">
                <input type="email" class="form-control icons_search_input inputbox " name="email"  placeholder="Your Mail" ="off" required>
              </div>
            </div>

            <div class="col-lg-2 col-6 mb-2">
              <img width="23" height="23" src="https://img.icons8.com/ios/23/144383/conference-call--v1.png" class="icons_search mx-2" alt="conference-call--v1">
              <button class="btn col-lg-12 col-md-12 form-control testraveler dropdown-toggle text-black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="mt-2">
                  <span id="count123">1</span> Traveler
                </p>
              </button>
              <div class="row">
                <ul class="dropdown-menu dropdown-main">
                  <div class="col-lg-12">
                    <li>
                      <div class="form-group dropdown-item adult_drop mt-2">
                        <div class="minus-plus">
                          <h6>Passenger</h6>
                          <div class="number">
                            <!-- <span >-</span> -->
                            <img class="minus" width="18" height="18" src="https://img.icons8.com/ios/18/minus.png" alt="minus" />
                            <input type="text" name="passenger" value="1" class="passenger" onchange="limiter(this);" />
                            <!-- <span >+</span> -->
                            <img class="plus" width="18" height="18" src="https://img.icons8.com/ultraviolet/18/plus--v1.png" alt="plus--v1" />
                          </div>
                        </div>
                      </div>
                    </li>
                  </div>
              </div>
              </ul>
            </div>
            
            <div class="col-lg-2 col-6 mb-2">
              <img width="23" height="23" src="https://img.icons8.com/ios/23/144383/passenger-with-baggage.png" class="icons_search mx-2" alt="passenger-with-baggage" />
              <button class="btn col-lg-12 col-md-12 form-control countMain dropdown-toggle text-black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="mt-2">
                  <span id="countDay">1</span> Days
                </p>
              </button>
              <div class="row">
                <ul class="dropdown-menu dropdown-main">
                  <div class="col-lg-12">
                    <li>
                      <div class="form-group dropdown-item adult_drop mt-2">
                        <div class="minus-plus">
                          <h6>Days</h6>
                          <div class="number">
                            <!-- <span >-</span> -->
                            <img class="minus" width="18" height="18" src="https://img.icons8.com/ios/18/minus.png" alt="minus" />
                            <input type="text" name="days" value="1" class="days" onchange="limiter(this);" />
                            <!-- <span >+</span> -->
                            <img class="plus" width="18" height="18" src="https://img.icons8.com/ultraviolet/18/plus--v1.png" alt="plus--v1" />
                          </div>
                        </div>
                      </div>
                    </li>
                  </div>
              </div>
              </ul>
            </div>
            <div class="col-lg-2 col-6 mb-2">
              <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="form-control" ></select>
            </div>
            <div class="col-lg-2 col-6 mb-2">
              <select name="city" id="state" class="form-control" ></select>
              <script language="javascript">
                print_state("sts");
              </script>
            </div>
       
            <div class="col-lg-2 col-6 mb-2">
              <div class="form-group">
              <input hidden="true" name="date" type="text" value="<?php echo date('j/n/Y'); ?>"> 
                <input hidden="true" name="time" type="text" value="<?php echo date('H:i:s'); ?>">
                <button type="submit" class="btn btn-submit mb-2 form-control" id="btnSubmit"> Book Now </button>
              </div>
            </div>
          </div>
        </form>
        <!--- search now -->
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.16.1/lodash.min.js"></script>
      <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>-->
      <script src="https://unpkg.com/fuse.js@2.5.0/src/fuse.min.js"></script>
      <script src="https://screenfeedcontent.blob.core.windows.net/html/airports.js"></script>
      <script>
        var options = {
          shouldSort: true,
          threshold: 0.4,
          maxPatternLength: 32,
          keys: [{
            name: "iata",
            weight: 0.5,
          }, {
            name: "name",
            weight: 0.3,
          }, {
            name: "city",
            weight: 0.2,
          }, ],
        };
        var fuse = new Fuse(airports, options);
        var ac = $("#sourceLocation").on("click", function(e) {
          e.stopPropagation();
        }).on("focus keyup", search).on("keydown", onKeyDown);
        var wrap = $(" < div > ").addClass("-wrapper").insertBefore(ac).append(ac);
            var list = $(" < div > ").addClass("-results").on("click", ".-result", function(e) {
                  e.preventDefault();
                  e.stopPropagation();
                  selectIndex($(this).data("index"));
                }).appendTo(wrap); $(document).on("mouseover", ".-result", function(e) {
                  var index = parseInt($(this).data("index"), 10);
                  if (!isNaN(index)) {
                    list.attr("data-highlight", index);
                  }
                }).on("click", clearResults);

                function clearResults() {
                  results = [];
                  numResults = 0;
                  list.empty();
                }

                function selectIndex(index) {
                  if (results.length >= index + 1) {
                    ac.val(results[index].iata);
                    clearResults();
                  }
                }
                var results = [];
                var numResults = 0;
                var selectedIndex = -1;

                function search(e) {
                  if (e.which === 38 || e.which === 13 || e.which === 40) {
                    return;
                  }
                  if (ac.val().length > 0) {
                    results = _.take(fuse.search(ac.val()), 7);
                    numResults = results.length;
                    // console.log("data is here " + numResults); return false;
                    var divs = results.map(function(r, i) {
                      return (' < div class = "-result"
                        data - index = "' +
                        i + '">' + " < div > < b > " +
                        r.iata + "</b> - " + r.name + " < /div>" +
                        ' < div class = "-location" > ' +
                        r.city + ", " + r.country + "</div>" + " < /div>");
                    });
                    selectedIndex = -1;
                    list.html(divs.join("")).attr("data-highlight", selectedIndex);
                  } else {
                    numResults = 0;
                    list.empty();
                  }
                }

                function onKeyDown(e) {
                  switch (e.which) {
                    case 38: // up
                      selectedIndex--;
                      if (selectedIndex <= -1) {
                        selectedIndex = -1;
                      }
                      list.attr("data-highlight", selectedIndex);
                      break;
                    case 13: // enter
                      selectIndex(selectedIndex);
                      break;
                    case 9: // enter
                      selectIndex(selectedIndex);
                      e.stopPropagation();
                      return;
                    case 40: // down
                      selectedIndex++;
                      if (selectedIndex >= numResults) {
                        selectedIndex = numResults - 1;
                      }
                      list.attr("data-highlight", selectedIndex);
                      break;
                    default:
                      return; // exit this handler for other keys
                  }
                  e.stopPropagation();
                  e.preventDefault(); // prevent the default action (scroll / move caret)
                }
                var ac2 = $("#destinationLocation").on("click", function(e) {
                  e.stopPropagation();
                }).on("focus keyup", search2).on("keydown", onKeyDown2);
                var wrap2 = $(" < div > ").addClass("-wrapper2").insertBefore(ac2).append(ac2);
                    var list2 = $(" < div > ").addClass("-results2").on("click", ".-result2", function(e) {
                          e.preventDefault();
                          e.stopPropagation();
                          selectIndex2($(this).data("index"));
                        }).appendTo(wrap2); $(document).on("mouseover", ".-result2", function(e) {
                          var index = parseInt($(this).data("index"), 10);
                          if (!isNaN(index)) {
                            list2.attr("data-highlight", index);
                          }
                        }).on("click", clearResults2);

                        function clearResults2() {
                          results2 = [];
                          numResults2 = 0;
                          list2.empty();
                        }

                        function selectIndex2(index) {
                          if (results2.length >= index + 1) {
                            ac2.val(results2[index].iata);
                            clearResults2();
                          }
                        }
                        var results2 = [];
                        var numResults2 = 0;
                        var selectedIndex2 = -1;

                        function search2(e) {
                          if (e.which === 38 || e.which === 13 || e.which === 40) {
                            return;
                          }
                          if (ac2.val().length > 0) {
                            results2 = _.take(fuse.search(ac2.val()), 7);
                            numResults2 = results2.length;
                            var divs = results2.map(function(r, i) {
                              return (' < div class = "-result2"
                                data - index = "' +
                                i + '">' + " < div > < b > " +
                                r.iata + "</b> - " + r.name + " < /div>" +
                                ' < div class = "-location" > ' +
                                r.city + ", " + r.country + "</div>" + " < /div>");
                            });
                            selectedIndex2 = -1;
                            list2.html(divs.join("")).attr("data-highlight", selectedIndex2);
                          } else {
                            numResults2 = 0;
                            list2.empty();
                          }
                        }

                        function onKeyDown2(e) {
                          switch (e.which) {
                            case 38: // up
                              selectedIndex2--;
                              if (selectedIndex2 <= -1) {
                                selectedIndex2 = -1;
                              }
                              list2.attr("data-highlight", selectedIndex2);
                              break;
                            case 13: // enter
                              selectIndex2(selectedIndex2);
                              break;
                            case 9: // enter
                              selectIndex2(selectedIndex2);
                              e.stopPropagation();
                              return;
                            case 40: // down
                              selectedIndex2++;
                              if (selectedIndex2 >= numResults2) {
                                selectedIndex2 = numResults2 - 1;
                              }
                              list2.attr("data-highlight", selectedIndex2);
                              break;
                            default:
                              return; // exit this handler for other keys
                          }
                          e.stopPropagation();
                          e.preventDefault(); // prevent the default action (scroll / move caret)
                        }
      </script>
      <script>
        $(".form-radio").change(function() {
          if (this.value == "one-way") {} else if (this.value == "round") {}
        });
      </script>
      <script>
        $(document).ready(function() {
          $(".minus").click(function() {
            var $input = $(this).parent().find("input");
            var count = parseInt($input.val()) - 1;
            count = count < 0 ? 0 : count;
            $input.val(count);
            $input.change();
            updateDropdownButtonText();
            return false;
          });
          $(".plus").click(function() {
            var $input = $(this).parent().find("input");
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            updateDropdownButtonText();
            return false;
          });

          function updateDropdownButtonText() {
            const passengerValue = parseInt($('[name="passenger"]').val());
            const totalTravelers = passengerValue;
            $("#count123").text(totalTravelers);
            $(".testraveler").text(totalTravelers + " Traveler");
            console.log("working")
            const dayValue = parseInt($('[name="days"]').val());
            const totalDays = dayValue;
            $("#countDay").text(totalDays);
            $(".countMain").text(totalDays + " Day");
          }
        });

        function limiter(input) {
          if (input.value < 0) input.value = 0;
          if (input.value > 9) input.value = 9;
        }
        $(document).ready(function() {
          $(".hide").click(function() {
            $(".click").show();
            $(".click1").hide();
          });
          $(".show").click(function() {
            $(".click1").show();
            $(".click").hide();
          });
        });
        $(function() {
          $("#range").daterangepicker({
            autoUpdateInput: false,
            autoApply: true,
            minDate: new Date(),
            locale: {
              cancelLabel: "Clear",
            },
          });
          $("#range").on("apply.daterangepicker", function(ev, picker) {
            $(this).val(picker.startDate.format("YYYY/MM/DD") + " - " + picker.endDate.format("YYYY/MM/DD"));
          });
          $("#range").on("cancel.daterangepicker", function(ev, picker) {
            $(this).val("");
          });
        });
        $("#depart").daterangepicker({
            singleDatePicker: true,
            autoUpdateInput: false,
            autoApply: true,
            minDate: new Date(),
          },
          (from_date) => {
            $("#depart").val(from_date.format("YYYY/MM/DD"));
          });
      </script>
      <script>
        const inputs = document.querySelectorAll('input[type="text"]');
        const result = document.querySelector("#result");

        function handleChange() {
          let total = 0;
          inputs.forEach((input) => (total += Number(input.value)));
          result.value = total;
        }
      </script>
      <script>
        $(document).ready(function() {
          $("#depart").show();
          $("#gridRadios2").click(function() {
            $("#depart").hide();
          });
          $("#gridRadios1").click(function() {
            $("#depart").show();
          });
        });
      </script>
      <script>
        jQuery('#frmSubmit').on('submit', function(e) {
          e.preventDefault();
          // $("form-group:div").addClass("intro");
          // jQuery('#msg').html('Please wait...');
          var formData = jQuery(this).serialize();
          jQuery('#btnSubmit').attr('disabled', true);
          jQuery.ajax({
            url: 'https://script.google.com/macros/s/AKfycbzoNAdjfM27y5eUV-oLklq3jeHks9LQ7WsWAZi41opmwKt8OeV0Aap77lKeInLGkL62/exec',
            type: 'post',
            data: formData,
            success: function(result) {
              jQuery('#frmSubmit')[0].reset();
              jQuery('#msg').html('Thank You');
              jQuery('#btnSubmit').attr('disabled', false);
              //var url = 'https://www.bookviaus.com/listing.php?'+formData;
              window.location.href = 'https://www.bookviaus.com/india/thankyou';
              // window.location.href = url;
            }
          });
        });
      </script>
    </div>
  </div>
</section>