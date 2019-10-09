<div class="table-data">
    @foreach ($collection as $item)
        <tr>
            <td id="company-id" style="width:5%">{{ $item->org_id }}</td>
            <td id="company-name">{{ $item->org_name }}</td>
            <td id="company-email">{{ $item->org_bill_email }}</td>
            <td id="migrate-date">{{ $item->date_execute }}</td>
            <td id="migrate-last-state">{{ $item->orgmigrate_laststate }}</td>
            <td id="migrate-message">{{ $item->orgmigrate_message }}</td>
            <td id="migrate-action">
            <button type="button" id="button-detail" data-company-id="{{ $item->org_id }}" class="btn btn-circle btn-default"><i class="fa fa-eye"></i> View Detail</button>&nbsp;&nbsp;&nbsp;
                <button type="button" id="button-detail" data-company-id="{{ $item->org_id }}" class="btn btn-circle btn-default"><i class="fa fa-history"></i> View History</button>
            </td>
        </tr>
    @endforeach
</div>