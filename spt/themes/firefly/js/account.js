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
		dataSource: {
			transport: {
				read: {
		            // the remote service url
		            url: accountUrl+"?isDomain=1",
		            // the request type
		            type: "get",
		            // the data type of the returned result
		            dataType: "json",
		        }
			},
			schema: {
		        // the data, which the data source will be bound to is in the "list" field of the response
		        data: "data",
		        total: "total",
		        model: {
                    fields: {
                    	id_product: { type: "number" },
                        product_name: { type: "string" },
                        terms: { type: "number" },
                        cash: { type: "number" },
                        date_add: { type: "date" },
                        expired_date: { type: "date" },
                        auto_renew: { type: "number" }
                    }
                }
		   },
			pageSize: 15
		},
		sortable: true,
		pageable: {
			refresh: true,
			pageSizes: true,
			buttonCount: 5
		},
		columns: [
		{
			field: "product_name",
			title: "Domain name"
		},
		{
			field: "terms",
			title: "Years",
			width: 70,
			cellsalign: 'right'
		},
		{
			field: "cash",
			title: "Total",
			width: 100,
			format: '{0:0}',
			cellsalign: 'right'
		},
		{
			field: "date_add",
			title: "Purchased Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "expired_date",
			title: "Expired Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "auto_renew", 
			title: "Auto-renew",
			width: 120,
			template: "<input type='checkbox' #= (auto_renew == 1) ? checked='checked' : '' # />" 
		},
		{
			command: {
				text: "Renew", 
				name: "id_product",
		        click: function(e) {
		          // e.target is the DOM element representing the button
		          var tr = $(e.target).closest("tr"); // get the current table row (tr)
		          // get the data bound to the current table row
		          var data = this.dataItem(tr);
		          accountAddToCart(data.id_product, data.terms, data.product_name);
		        }
			},
			width: 100
		}]
	});
	$("#grid_hosting").kendoGrid({
		dataSource: {
			transport: {
				read: {
		            // the remote service url
		            url: accountUrl+"?isHosting=1",
		            // the request type
		            type: "get",
		            // the data type of the returned result
		            dataType: "json",
		        }
			},
			schema: {
		        // the data, which the data source will be bound to is in the "list" field of the response
		        data: "data",
		        total: "total",
		        model: {
                    fields: {
                        id_product: { type: "number" },
                        product_name: { type: "string" },
                        terms: { type: "number" },
                        cash: { type: "number" },
                        date_add: { type: "date" },
                        expired_date: { type: "date" },
                        auto_renew: { type: "number" }
                    }
                }
		   },
			pageSize: 15
		},
		sortable: true,
		pageable: {
			refresh: true,
			pageSizes: true,
			buttonCount: 5
		},
		columns: [
		{
			field: "product_name",
			title: "Hosting name"
		},
		{
			field: "terms",
			title: "Months",
			width: 80,
		},
		{
			field: "cash",
			title: "Total",
			width: 100,
			format: '{0:0}'
		},
		{
			field: "date_add",
			title: "Purchased Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "expired_date",
			title: "Expired Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "auto_renew", 
			title: "Auto-renew",
			width: 120,
			template: "<input type='checkbox' #= (auto_renew == 1) ? checked='checked' : '' # />" 
		},
		{
			command: {
				text: "Renew", 
				name: "id_product",
		        click: function(e) {
		          // e.target is the DOM element representing the button
		          var tr = $(e.target).closest("tr"); // get the current table row (tr)
		          // get the data bound to the current table row
		          var data = this.dataItem(tr);
		          accountAddToCart(data.id_product, data.terms, '');
		        }
			},
			width: 100
		}]
	});
	$("#grid_vps").kendoGrid({
		dataSource: {
			transport: {
				read: {
		            // the remote service url
		            url: accountUrl+"?isVPS=1",
		            // the request type
		            type: "get",
		            // the data type of the returned result
		            dataType: "json",
		        }
			},
			schema: {
		        // the data, which the data source will be bound to is in the "list" field of the response
		        data: "data",
		        total: "total",
		        model: {
                    fields: {
                        id_product: { type: "number" },
                        product_name: { type: "string" },
                        terms: { type: "number" },
                        cash: { type: "number" },
                        date_add: { type: "date" },
                        expired_date: { type: "date" },
                        auto_renew: { type: "number" }
                    }
                }
		   },
			pageSize: 15
		},
		sortable: true,
		pageable: {
			refresh: true,
			pageSizes: true,
			buttonCount: 5
		},
		columns: [
		{
			field: "product_name",
			title: "VPS name"
		},
		{
			field: "terms",
			title: "Months",
			width: 80,
		},
		{
			field: "cash",
			title: "Total",
			width: 100,
			format: '{0:0}'
		},
		{
			field: "date_add",
			title: "Purchased Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "expired_date",
			title: "Expired Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "auto_renew", 
			title: "Auto-renew",
			width: 120,
			template: "<input type='checkbox' #= (auto_renew == 1) ? checked='checked' : '' # />" 
		},
		{
			command: {
				text: "Renew", 
				name: "id_product",
		        click: function(e) {
		          // e.target is the DOM element representing the button
		          var tr = $(e.target).closest("tr"); // get the current table row (tr)
		          // get the data bound to the current table row
		          var data = this.dataItem(tr);
		          accountAddToCart(data.id_product, data.terms, '');
		        }
			},
			width: 100
		}]
	});
	$("#grid_email").kendoGrid({
		dataSource: {
			transport: {
				read: {
		            // the remote service url
		            url: accountUrl+"?isEmail=1",
		            // the request type
		            type: "get",
		            // the data type of the returned result
		            dataType: "json",
		        }
			},
			schema: {
		        // the data, which the data source will be bound to is in the "list" field of the response
		        data: "data",
		        total: "total",
		        model: {
                    fields: {
                        id_product: { type: "number" },
                        product_name: { type: "string" },
                        terms: { type: "number" },
                        cash: { type: "number" },
                        date_add: { type: "date" },
                        expired_date: { type: "date" },
                        auto_renew: { type: "number" }
                    }
                }
		   },
			pageSize: 15
		},
		sortable: true,
		pageable: {
			refresh: true,
			pageSizes: true,
			buttonCount: 5
		},
		columns: [
		{
			field: "product_name",
			title: "Email name"
		},
		{
			field: "terms",
			title: "Months",
			width: 80,
		},
		{
			field: "cash",
			title: "Total",
			width: 100,
			format: '{0:0}'
		},
		{
			field: "date_add",
			title: "Purchased Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "expired_date",
			title: "Expired Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		},
		{
			field: "auto_renew", 
			title: "Auto-renew",
			width: 120,
			template: "<input type='checkbox' #= (auto_renew == 1) ? checked='checked' : '' # />" 
		},
		{
			command: {
				text: "Renew", 
				name: "id_product",
		        click: function(e) {
		          // e.target is the DOM element representing the button
		          var tr = $(e.target).closest("tr"); // get the current table row (tr)
		          // get the data bound to the current table row
		          var data = this.dataItem(tr);
		          accountAddToCart(data.id_product, data.terms, '');
		        }
			},
			width: 100
		}]
	});
	$("#grid1").kendoGrid({
		dataSource: {
			transport: {
				read: {
		            // the remote service url
		            url: accountUrl+"?isClient=1",
		            // the request type
		            type: "get",
		            // the data type of the returned result
		            dataType: "json",
		        }
			},
			schema: {
		        // the data, which the data source will be bound to is in the "list" field of the response
		        data: "data",
		        total: "total",
		        model: {
                    fields: {
                        lastname: { type: "string" },
                        firstname: { type: "string" },
                        email: { type: "string" },
                        date_upd: { type: "date" },
                    }
                }
		   },
			pageSize: 15
		},
		sortable: true,
		pageable: {
			refresh: true,
			pageSizes: true,
			buttonCount: 5
		},
		columns: [
		{
			field: "lastname",
			title: "Last Name"
		},
		{
			field: "firstname",
			title: "First Name"
		},
		{
			field: "email",
			title: "Email"
		},
		{
			field: "date_upd",
			title: "Updated Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		}]
	});
	$("#grid2").kendoGrid({
		dataSource: {
			transport: {
				read: {
		            // the remote service url
		            url: accountUrl+"?isHistory=1",
		            // the request type
		            type: "get",
		            // the data type of the returned result
		            dataType: "json",
		        }
			},
			schema: {
		        // the data, which the data source will be bound to is in the "list" field of the response
		        data: "data",
		        total: "total",
		        model: {
                    fields: {
                        spent: { type: "number" },
                        charged: { type: "number" },
                        remain: { type: "number" },
                        date_upd: { type: "date" },
                    }
                }
		   },
			pageSize: 15
		},
		sortable: true,
		pageable: {
			refresh: true,
			pageSizes: true,
			buttonCount: 5
		},
		columns: [
		{
			field: "spent",
			title: "Spent",
			format: '{0:0}'
		}, 
		{
			field: "charged",
			title: "Charged",
			format: '{0:0}'
		}, 
		{
			field: "remain",
			title: "Remain",
			format: '{0:0}'
		},
		{
			field: "date_upd",
			title: "Updated Date",
			format: '{0:dd/MM/yyyy hh:mm tt}'
		}]
	});
	
	//popupuser--------------------------
	var window2 = $("#window_recharge"), undo2 = $("#undo_recharge");

	undo2.bind("click", function() {
		window2.data("kendoWindow").open();
		undo2.hide();
		$('.bg_dark').addClass('active');
	});

	if (!window2.data("kendoWindow")) {
		window2.kendoWindow({
			width : "895px",
			actions : ["Close"],
			title : "Recharge",
			close : function() {
				undo2.show();
				$('.bg_dark').removeClass('active');
			}
		});
	}
	window2.data("kendoWindow").wrapper.find(".k-i-custom").click(function(e) {
		alert("Custom action button clicked");
		e.preventDefault();
	});
	//popupuser--------------------------end
}); 

$(document).on('click', '#recharge_addtocart', function(e){
	e.preventDefault();
	if(!confirm("This action will delete all current items in your cart. Continue to process?")){
		return;
	}
	var product_id = $("#recharge_product_id").val();
	var quantity = 1;
	accountAddToCart(product_id, quantity, '__recharge__');
});

function accountAddToCart(product_id, quantity, domain_name){
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: baseUri + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=cart&add=1&ajax=true&qty=' + ((quantity && quantity != null) ? quantity : '1') + '&id_product=' + product_id + '&txt_search=' + domain_name + '&token=' + static_token,
		success: function(jsonData,textStatus,jqXHR)
		{
			if (!jsonData.hasError)
			{
				window.location.href = cartUrl;
			} else{
				alert(jsonData.errors);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown)
		{
			var error = "Impossible to add the product to the cart.<br/>textStatus: '" + textStatus + "'<br/>errorThrown: '" + errorThrown + "'<br/>responseText:<br/>" + XMLHttpRequest.responseText;
			alert(error);
		}
	});
}
