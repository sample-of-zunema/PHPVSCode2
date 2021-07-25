<td>
            <th>_____</th>
            <th>_c1</th>
            <th>_c2</th>
            <th>_c3</th>
            <th>横合計</th>
        </td>
        <?php foreach($arr as $r_key => $c_arr): ?>
        <td>
            <td><?php $r_key ?></td>
            <td><?php $c_arr['c1'] ?></td>
            <td><?php $c_arr['c2'] ?></td>
            <td><?php $c_arr['c3'] ?></td>
            <td><?php array_sum($c_arr); ?></td>
        </td>
        <?php endforeach:?>