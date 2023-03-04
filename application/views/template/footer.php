<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>WHATSAPP V.1</span></strong>. All Rights Reserved
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url();?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url();?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- data table -->
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

  <!-- sweet alert -->
  <script src="<?= base_url('assets/js/sweetalert/sweetalert.min.js');?>"></script>
  <!-- codemirror -->
  <script src="<?= base_url();?>assets/plugin/codemirror/codemirror.js"></script>
  <script src="<?= base_url();?>assets/plugin/codemirror/mode/css/css.js"></script>
  <script src="<?= base_url();?>assets/plugin/codemirror/mode/xml/xml.js"></script>
  <script src="<?= base_url();?>assets/plugin/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url();?>assets/js/main.js"></script>

   <?php if ($this->session->userdata('message')): ?>
        <?php echo $this->session->userdata('message'); ?>
    <?php endif ?>

 <!--  <script>
  $(function () {
    
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "phpmixed",
      theme: "monokai",
      lineNumbers: true,
    });
  })
</script> -->

</body>

</html>