<tr>
    <td class="project-status">
        <span class="label label-primary">Active</span>
    </td>
    <td class="project-title">
        <a href="{{ route('servico.show', ['id' => $projeto->id]) }}">{{ $projeto->titulo }}</a>
        <br/>
        <small>Created 14.08.2014</small>
    </td>
    <td class="project-completion">
            <small>Completion with: 48%</small>
            <div class="progress progress-mini">
                <div style="width: 48%;" class="progress-bar"></div>
            </div>
    </td>
    <td class="project-people">
        <a href=""><img alt="image" class="rounded-circle" src="img/a3.jpg"></a>
        <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
        <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
        <a href=""><img alt="image" class="rounded-circle" src="img/a4.jpg"></a>
        <a href=""><img alt="image" class="rounded-circle" src="img/a5.jpg"></a>
    </td>
    <td class="project-actions">
        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
    </td>
</tr>