$(document).ready(function () {
    $("#cadFuncionario").click(function () {
        $("#cadFuncionario").addClass("active");
        $("#calcSalario").removeClass("active");
        $("#calcAumentarSal").removeClass("active");
        $("#showData").removeClass("active");
        $(".cadFunc").css({ display: "block" });
        $(".calcSal").css({ display: "none" });
        $(".aumentoSal").css({ display: "none" });
        $(".showData").css({ display: "none" });
    });
});
$(document).ready(function () {
    $("#calcSalario").click(function () {
        $("#calcSalario").addClass("active");
        $("#cadFuncionario").removeClass("active");
        $("#calcAumentarSal").removeClass("active");
        $("#showData").removeClass("active");
        $(".cadFunc").css({ display: "none" });
        $(".calcSal").css({ display: "block" });
        $(".aumentoSal").css({ display: "none" });
        $(".showData").css({ display: "none" });
    });
});
$(document).ready(function () {
    $("#calcAumentarSal").click(function () {
        $("#calcAumentarSal").addClass("active");
        $("#calcSalario").removeClass("active");
        $("#cadFuncionario").removeClass("active");
        $("#showData").removeClass("active");
        $(".cadFunc").css({ display: "none" });
        $(".calcSal").css({ display: "none" });
        $(".aumentoSal").css({ display: "block" });
        $(".showData").css({ display: "none" });
    });
});
$(document).ready(function () {
    $("#showData").click(function () {
        $("#showData").addClass("active");
        $("#cadFuncionario").removeClass("active");
        $("#calcAumentarSal").removeClass("active");
        $("#calcSalario").removeClass("active");
        $(".cadFunc").css({ display: "none" });
        $(".calcSal").css({ display: "none" });
        $(".aumentoSal").css({ display: "none" });
        $(".showData").css({ display: "block" });
    });
});