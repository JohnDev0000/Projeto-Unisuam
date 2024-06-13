<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/../Classes/Database.php';

    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Admin');
    $pdf->SetTitle('Lista de Usuários');
    $pdf->SetSubject('Lista de Usuários do Sistema');
    $pdf->SetKeywords('PDF, Lista, Usuários, Sistema');

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    $pdf->AddPage();

    $database = new Database('usuarios');
    $usuarios = $database->select();

    $html = '<h1>Lista de Usuários</h1>';

    $html .= '<table border="1">';
    $html .=
        '<tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>Cpf</th>
            <th>Telefone Celular</th>
            <th>Endereço</th>
            <th>Complemento</th>
        </tr>';

    foreach ($usuarios as $usuario) {
        $html .= '<tr>';
        $html .= '<td>' . $usuario['id'] . '</td>';
        $html .= '<td>' . $usuario['nome'] . '</td>';
        $html .= '<td>' . $usuario['data_nascimento'] . '</td>';
        $html .= '<td>' . $usuario['sexo'] . '</td>';
        $html .= '<td>' . $usuario['cpf'] . '</td>';
        $html .= '<td>' . $usuario['telefone_celular'] . '</td>';
        $html .= '<td>' . $usuario['endereco'] . '</td>';
        $html .= '<td>' . $usuario['complemento'] . '</td>';

        $html .= '</tr>';
    }
    $html .= '</table>';

    $pdf->writeHTML($html, true, false, true, false, '');
    ob_clean();
    $pdf->Output('lista_usuarios.pdf', 'I');
