<script>

    function generatePDF() {
        
        window.location.href = "{{ route('generate.pdf') }}";
    }

    function printPage() {
        window.print();
    }


</script>
