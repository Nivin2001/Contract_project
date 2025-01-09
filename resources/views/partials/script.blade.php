<script>

function generatePDF(contractId) {
    window.location.href = "{{ route('contracts.downloadPdf', ['id' => '__contract_id__']) }}".replace('__contract_id__', contractId);
}


    function printPage() {
        window.print();
    }


</script>
