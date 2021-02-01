<script>
    $(function() {

        new AutoNumeric('#page_1 .budget', {
            currencySymbol: "$",
            caretPositionOnFocus: "start",
            modifyValueOnWheel: false
        });

        new AutoNumeric('#page_2 .budget', {
            currencySymbol: "",
            caretPositionOnFocus: "start",
            modifyValueOnWheel: false
        });

        /// When input total budget on Page 1
        $("#page_1 .budget").on("keyup", function() {
            var sub_budget_td = $("#page_1 .price");
            var total_budget_temp = $("#page_1 .budget").val();
            total_budget_temp = total_budget_temp.substr(1, total_budget_temp.length - 1).split("");
            var total_budget = "";
            var main_ratio = 0;
            var other_ratio;
            for (x in total_budget_temp) {
                if (total_budget_temp[x] != ",") {
                    total_budget += total_budget_temp[x];
                }
            }
            for (var i = 0; i < sub_budget_td.length; i++) {
                var ratio = $("#page_1 .price").eq(i).children(".ratio").val();
                var sub_budget = Number(ratio) * Number(total_budget);
                $("#page_1 .price").eq(i).children("span").html("$ " + "<span class='float-right'>" + sub_budget.toFixed(2) + "</span>");
            }
            for (var j = 0; j < $("#page_1 .ratio").length - 1; j++) {
                main_ratio += Number($("#page_1 .ratio").eq(j).val());
            }
            other_ratio = total_budget * (1 - main_ratio);
            $("#page_1 #ratio").html("$ " + "<span class='float-right'>" + other_ratio.toFixed(2) + "</span>");
        });

        // when input total budget on Page 2
        $("#page_2 .budget").on("keyup", function() {
            var sub_budget_td = $("#page_2 .price");
            var total_budget_temp = $("#page_2 .budget").val();
            total_budget_temp = total_budget_temp.substr(1, total_budget_temp.length - 1).split("");
            var total_budget = "";
            var main_ratio = 0;
            var other_ratio;
            for (x in total_budget_temp) {
                if (total_budget_temp[x] != ",") {
                    total_budget += total_budget_temp[x];
                }
            }
            for (var i = 0; i < sub_budget_td.length; i++) {
                var ratio = $("#page_2 .price").eq(i).children(".ratio").val();
                var sub_budget = Number(ratio) * Number(total_budget);
                $("#page_2 .price").eq(i).children("span").html("$ " + "<span class='float-right'>" + sub_budget.toFixed(2) + "</span>");
            }
            for (var j = 0; j < $("#page_2 .ratio").length - 1; j++) {
                main_ratio += Number($("#page_2 .ratio").eq(j).val());
            }
            other_ratio = total_budget * (1 - main_ratio);
            $("#page_2 #ratio").html("<span class='float-right'>" + other_ratio.toFixed(2) + "</span>");
        });
        //  Tooltip
        $('[data-toggle="popover"]').popover();

        //  Bootstrap tour
        $(".budget").on("focus", function() {
            $(this).css("background", "yellow")
        });
        $(".budget").on("blur", function() {
            $(this).css("background", "white")
        });

        // Next button click
        $("#next").on("click", function() {
            $("#page_1").addClass("d-none");
            $("#page_2").removeClass("d-none");
        });

        // Click Prev in Page_2
        $("#LT_prev").on("click", function() {
            $("#page_1").removeClass("d-none");
            $("#page_2").addClass("d-none");
        });

        // Submit event
        $("#submit").on("click", function() {
            $.ajax({
                url: "../../model/main_model.php",
                type: "post",
                data: {
                    type: "submit",
                    expenditure: $("#expenditure .budget").val(),
                    leisure: $("#leisure .time").val(),
                    page1_feedback: $("#page1_feedback").val(),
                    page2_feedback: $("#page2_feedback").val()
                },
                success: function(res) {
                    window.location.href = "../dashboard/dashboard.php";
                }
            })
        })

        //category add event
        $("#page1_add_category").on("click", function(e) {
            if ($("#page1_category").val() != "") {
                $.ajax({
                    url: "../../model/main_model.php",
                    type: "post",
                    data: {
                        type: "page1_category",
                        pageid: "<?php echo $_SESSION['code'] . '1' ?>",
                        page1_category: $("#page1_category").val()
                    },
                    success: function(res) {
                        if (res == "success") {
                            $(".alert-success").removeClass("d-none");
                            $(".alert-success").addClass("show");
                            setTimeout(function() {
                                $(".alert-success").addClass("d-none");
                                $(".alert-success").removeClass("show");
                            }, 2000);
                        } else {
                            $(".alert-danger").addClass("show");
                            setTimeout(function() {
                                $(".alert-danger").removeClass("show");
                            }, 3000);
                        }
                    }
                })
            } else {
                $(".alert-danger .notification").html("Please add new category.");
                $(".alert-danger").addClass("show");
                setTimeout(function() {
                    $(".alert-danger").removeClass("show");
                }, 3000);
            }
        })

        $("#page2_add_category").on("click", function(e) {
            if ($("#page2_category").val() != "") {
                $.ajax({
                    url: "../../model/main_model.php",
                    type: "post",
                    data: {
                        type: "page2_category",
                        pageid: "<?php echo $_SESSION['code'] . '2' ?>",
                        page2_category: $("#page2_category").val()
                    },
                    success: function(res) {
                        if (res == "success") {
                            $(".alert-success").removeClass("d-none");
                            $(".alert-success").addClass("show");
                            setTimeout(function() {
                                $(".alert-success").addClass("d-none");
                                $(".alert-success").removeClass("show");
                            }, 2000);
                        } else {
                            $(".alert-danger").addClass("show");
                            setTimeout(function() {
                                $(".alert-danger").removeClass("show");
                            }, 3000);
                        }
                    }
                })
            } else {
                $(".alert-danger .notification").html("Please add new category.");
                $(".alert-danger").addClass("show");
                setTimeout(function() {
                    $(".alert-danger").removeClass("show");
                }, 3000);
            }
        })

        //logout event
        $("#logout").on("click", function(e) {
            e.preventDefault();
            $.ajax({
                url: "../../model/auth_model.php",
                type: "post",
                data: {
                    type: "logout"
                },
                success: function(res) {
                    if (res == "success") {
                        window.location.href = "/php/index.php";
                    }
                }
            });
        });

    })
</script>