/**
 * JQuery-AJAX filteration for Property Listing Page
 */
jQuery(document).ready(function ($) {
  $("#advSearchBtn").on("click", function () {
    var location = $("#mainLocation").val();
    var category = $("#propCategory").val();
    var status = $("#propStatus").val();
    var sort = $("#propSort").val();
    var max_budget = $("#loan-amount").val();
    var min_budget = $("#min-budget").val();

    var ajaxurl = ajax_object.ajax_url;

    $.ajax({
      url: ajaxurl,
      type: "GET",
      dataType: "html",
      data: {
        action: "fetch_properties",
        location: location,
        category: category,
        status: status,
        sort: sort,
        min_budget: min_budget,
        max_budget: max_budget,
      },
      beforeSend: function () {
        $(".property_loader").addClass("l_show");
      },
      success: function (data) {
        $("#mainPropDiv").html(data);
        $("#mainPropDiv").fadeIn(500);
        $(".property_loader").removeClass("l_show");
      },
    });
  });

  /**
   * #####################################################
   *    AJAX Requests for "More Filter" Listing Page
   * #####################################################
   */
  $(".more_filter_card .form-check-input").on("change", function () {
    var propertyStatus = [];
    var propertyType = [];
    var bedrooms = [];

    var ajaxurl = ajax_object.ajax_url;

    // Collect checked property status
    $('.more_filter_card input[name="property_status[]"]:checked').each(
      function () {
        propertyStatus.push($(this).val());
      }
    );

    // Collect checked property types
    $('.more_filter_card input[name="property_type[]"]:checked').each(
      function () {
        propertyType.push($(this).val());
      }
    );

    // Collect checked bedrooms
    $('.more_filter_card input[name="bedroom[]"]:checked').each(function () {
      bedrooms.push($(this).val());
    });

    /** Hide The modal after Checked any Items */
    $(".more_filter_card").fadeOut(300);
    $(".backdrop").fadeOut(300);

    $.ajax({
      type: "POST",
      url: ajaxurl,
      data: {
        action: "filter_properties",
        property_status: propertyStatus,
        property_type: propertyType,
        bedrooms: bedrooms,
      },
      beforeSend: function () {
        $(".property_loader").addClass("l_show");
      },
      success: function (data) {
        $("#mainPropDiv").html(data);
        $("#mainPropDiv").fadeIn(500);
        $(".property_loader").removeClass("l_show");
      },
    });
  });
});
