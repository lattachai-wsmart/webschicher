<h1>Policy</h1>


<style>
        jQuery().ready(() => {
            jQuery("#js-validation").validate({
                errorClass: 'text-danger invalid-feedback animated fadeIn',
                highlight: function (element, errorClass) {
                    jQuery(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass) {
                    jQuery(element).removeClass('is-invalid');
                },
                // ignore: [],
                rules: {
                    "service_provider_name_th": {
                        required: !0,
                        // minlength: 3
                    },
                    "citizen_id": {
                        required: !0,
                    },
                    "service_provider_phone_number": {
                        required: !0,
                    },
                    "service_provider_address": {
                        required: !0,
                    },
                    "province_id": {
                        required: !0,
                        // email: !0
                    },
                    "amphure_id": {
                        required: !0,
                    },
                    "district_id": {
                        required: !0,
                    },
                    "latitude": {
                        required: !0,

                    },
                    "longitude": {
                        required: !0,
                    },
                },
                messages: {
                    "service_provider_name_th": {
                        required: "กรุณากรอกชื่อผู้ให้บริการ",
                        remote: "test",
                    },
                    "citizen_id": {
                        required: "กรุณากรอกเลขบัตรประชาชนหรือเลขนิติบุคคล",
                    },
                    "service_provider_phone_number": {
                        required: 'กรุณากรอกหมายเลขโทรศัพท์',
                    },
                    "service_provider_address": {
                        required: "กรุณากรอกที่อยู่",
                    },
                    "province_id": {
                        required: 'กรุณาเลือกจังหวัด',
                    },
                    "amphure_id": {
                        required: 'กรุณาเลือกอำเภอ/เขต',
                    },
                    "district_id": {
                        required: 'กรุณาเลือกตำบล/เเขวง',
                    },
                    "latitude": {
                        required: 'กรุณากรอกเลขละติจูด',
                    },
                    "longitude": {
                        required: 'กรุณากรอกเลขลองจิจูด',
                    },

                }
            })
        })
</style>
