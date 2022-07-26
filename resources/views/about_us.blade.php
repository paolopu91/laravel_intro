{{-- il tag extends deve essere unico per ogni pagina --}}
@extends('layouts.app')

{{-- metodo per inserire dati brevi in html come il page title, lo possiamo passare come secondo argomento nel tag section --}}
@section('page_title', "Chi siamo")

@section('header_scripts')

{{-- creare il nostro java, ad esempio script per creare google maps, codice che verrà usato e caricato solo su questa pagina --}}
<script>
    const variabile = "bla bla bla"
</script>

{{-- importare java esternamente  --}}
<script src=""></script>
@endsection

{{-- questo metodo invece ci permette di scrivere puro html per metterlo al posto di un placeholder --}}
@section('page_content')

    <h1>Chi Siamo?</h1>
    <h2>boh...</h2>

@endsection