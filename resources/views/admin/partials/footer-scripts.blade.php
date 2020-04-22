<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('js/all.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/sidebar/sidebar.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/switchery/dist/switchery.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/lightpick/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/lightpick/lightpick.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/lightpick/vn.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/datatable.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/select2-cs/dist/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/multipleselect/multi-select.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/tabs/tab-content.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/js/chart.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{URL::asset('assets/js/chart2.0.js')}}"></script>
@yield('script')
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function () {
            new Switchery($(this)[0], $(this).data());
        });
    });
    var picker = new Lightpick({
        field: document.getElementById('dateTime'),
        onSelect: function (date) {
            document.getElementById('result-1').innerHTML = date.format('Do MMMM YYYY');
        }
    });

    function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source) {
                checkboxes[i].checked = source.checked;
            }
        }
        $('table tbody tr').toggleClass('table-checked');
    }
</script>

