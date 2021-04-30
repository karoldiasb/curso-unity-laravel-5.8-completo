<html>
<body>
    
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Categorias</td>
        </tr>
        @foreach($produtos as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>
                <ul>
                    @foreach($p->categorias as $c)
                        <li>{{$c->nome}}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>