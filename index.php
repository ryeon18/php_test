<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/r-2.2.9/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/r-2.2.9/datatables.min.js"></script>
<script>
	$(function(){
		$('#table_id').DataTable({
			ajax:{url:"/data.json", dataSrc:''},
			columns:[
				{data:"id"},
				{data:"name"},
				{data:"date"},
				// {defaultContent:"-",
				//  orderable:false,
				//  render:function(data,type,row) {
				//         const id = row.id;
				//         return '<p id="'+id+'">'+id+' 헬로</p>';
				//  }
				// }, 
			],
			columnsDefs:[
			{targets:0, width:120}
			],
			lengthMenu:[5,10,15,20],
			responsive:true,
			language:{
				emptyTable:"데이터가 없습니다.",
				info:"현재 _START_ - _END_ / 총 _TOTAL_건",
				infoEmpty:"데이터 없음",
				loadingRecords:"로딩중...",
				processing:"잠시만 기다려 주세요.",
				paginate:{
					"next" : "다음",
					"previous" : "이전"
				}}
		})
	})
	</script>
</head>

<body>
<table id="table_id">
	<thead>
		<tr>
			<th>ID</th>
			<th>이름</th>
			<th>가입일</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
</body>

</html>