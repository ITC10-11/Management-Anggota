<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Divisi</th>
            <th>Biodata</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($anggota as $key)
        <tr>
            <td>{{$key->nama_lengkap}}</td>
            <td>{{$key->kelas}}</td>
            <td>{{$key->divisi}}</td>
            <td>{{$key->biodata}}</td>
            <td>{{$key->alamat}}</td>
            <td>
                <a href="{{url('admin/anggota/').'/'.$key->id.'/edit'}}"><button>Edit</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
