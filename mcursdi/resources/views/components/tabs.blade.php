<div>
    <button onclick="setTab('today')" class="{{ $activeTab === 'today' ? 'bg-blue-500 text-white' : '' }}">Hari
        Ini</button>
    <button onclick="setTab('all')" class="{{ $activeTab === 'all' ? 'bg-blue-500 text-white' : '' }}">smuuuu</button>
</div>

<script>
    function setTab(tab) {
        @this.call('setTab', tab);
    }
</script>
