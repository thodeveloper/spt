$(document).ready(function() {
	$("#tabstrip").kendoTabStrip({
		animation : {
			open : {
				effects : "fadeIn"
			}
		}
	});
	$("#panelbar").kendoPanelBar({
		expandMode : "single"
	});
	$("#panelbar1").kendoPanelBar({
		expandMode : "single"

	});
	$("#panelbar2").kendoPanelBar({
		expandMode: "single",    
	});
		
	$("#grid").kendoGrid({
		dataSource : {
			type : "odata",
			transport : {
				read : "http://demos.kendoui.com/service/Northwind.svc/Customers"
			},
			pageSize : 10
		},

		sortable : true,
		pageable : {
			refresh : true,
			pageSizes : true,
			buttonCount : 5
		},
		columns : [{
			field : "ContactName",
			title : "My domains"

		}, {

			field : "ContactTitle",
			title : "Expires",
			width : 140
		}, {
			command : {
				text : "Renew",
			},
			width : 110

		}, {
			command : {
				text : "Add Privacy",
			},
			title : "Registration Type",
			width : 160
		}, {
			field : "Country",
			title : "Associated Products",
			width : 170
		}]
	});
	$("#grid1").kendoGrid({
		dataSource : {
			type : "odata",
			transport : {
				read : "http://demos.kendoui.com/service/Northwind.svc/Customers"
			},
			pageSize : 10
		},

		sortable : true,
		pageable : {
			refresh : true,
			pageSizes : true,
			buttonCount : 5
		},
		columns : [{
			field : "ContactName",
			title : "My domains"

		}, {

			field : "ContactTitle",
			title : "Expires",
			width : 140
		}, {
			command : {
				text : "Renew",
			},
			width : 110

		}, {
			command : {
				text : "Add Privacy",
			},
			title : "Registration Type",
			width : 160
		}, {
			field : "Country",
			title : "Associated Products",
			width : 170
		}]
	});
	$("#grid2").kendoGrid({
		dataSource: {
			type: "odata",
			transport: {
				read: "http://demos.kendoui.com/service/Northwind.svc/Customers"
			},
			pageSize: 10
		},
		
		sortable: true,
		pageable: {
			refresh: true,
			pageSizes: true,
			buttonCount: 5
		},
		columns: [{
		command: { text: "c", },
			title: " ",
			width: 50
		}, {
			field: "ContactName",
			title: "Products"
			
		}, {
			field: "ContactTitle",
			title: " ",
			width: 140
		}, {
			command: { text: "dropdown list", },
			width: 160
		
		}, {
			command: { text: "View info", },
			title: " ",
			width: 140
		}, {
			command: { text: "c", },
			title:"Auto renew",
			width: 50
		}]
	});
}); 