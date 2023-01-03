/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.object.classes.data.indexFieldSelectionField");
pimcore.object.classes.data.indexFieldSelectionField = Class.create(pimcore.object.classes.data.data, {
    type: "indexFieldSelectionField",
    allowIndex: false,

    /**
     * define where this datatype is allowed
     */
    allowIn: {
        object: true,
        objectbrick: true,
        fieldcollection: true,
        localizedfield: true
    },        

    initialize: function (treeNode, initData) {
        this.type = "indexFieldSelectionField";

        this.initData(initData);

        this.treeNode = treeNode;
    },

    getTypeName: function () {
        return t("indexFieldSelectionFieldMulti");
    },

    getGroup: function () {
            return "ecommerce";
    },


    getIconClass: function () {
        return "pimcore_icon_indexFieldSelectionField";
    },

    getLayout: function ($super) {

        $super();

        this.specificPanel.removeAll();
        this.specificPanel.add([
            {
                xtype: "spinnerfield",
                fieldLabel: t("width"),
                name: "width",
                value: this.datax.width
            },
            {
                xtype: "spinnerfield",
                fieldLabel: t("height"),
                name: "height",
                value: this.datax.height
            },
            {
                xtype: "checkbox",
                fieldLabel: t("specificPriceField"),
                name: "specificPriceField",
                checked: this.datax.specificPriceField
            },
            {
                xtype: "checkbox",
                fieldLabel: t("showAllFields"),
                name: "showAllFields",
                checked: this.datax.showAllFields
            },
            {
                xtype: "checkbox",
                fieldLabel: t("considerTenants"),
                name: "considerTenants",
                checked: this.datax.considerTenants
            }
        ]);

        return this.layout;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.object.tags.indexFieldSelectionField");
pimcore.object.tags.indexFieldSelectionField = Class.create(pimcore.object.tags.abstract, {

    type: "indexFieldSelectionField",

    initialize: function (data, fieldConfig) {
        if(data) {
            this.data = data;
        } else {
            this.data = "";
        }

        this.fieldConfig = fieldConfig;

        this.store = new Ext.data.JsonStore({
            autoDestroy: true,
            autoLoad: true,
            proxy: {
                type: 'ajax',
                url: Routing.generate('pimcore_ecommerceframework_index_getfields'),
                reader: {
                    rootProperty: 'data',
                    idProperty: 'key'
                },
                extraParams: {class_id: fieldConfig.classId, specific_price_field: this.fieldConfig.specificPriceField, show_all_fields: this.fieldConfig.showAllFields }
            },
            fields: ['key','name'],
            listeners: {
                load: function(store) {

                    //add values to store, even if they are not in store
                    //needed, becuase on initial load, no tenant is selected, and there might be values selected, that are not in default tenant
                    if(this.firstLoad !== false) {
                        var values = this.data.split(",");
                        for(var i = 0; i < values.length; i++) {
                            if(store.find('key', values[i]) < 0) {
                                var defaultData = {
                                    'key': values[i],
                                    'name': t(values[i])
                                };
                                store.add(defaultData);
                            }
                        }
                        this.firstLoad = false;

                        if(this.fieldsCombobox) {
                            this.fieldsCombobox.setValue(this.data);
                        }

                    } else {

                        //on subsequent loads, check this.data for only allowed values
                        var allowedValues = [];
                        var originalValues = this.data.split(",");
                        for(var i = 0; i < originalValues.length; i++) {
                            if(store.find('key', originalValues[i]) >= 0) {
                                allowedValues.push(originalValues[i]);
                            }
                        }
                        if(this.fieldsCombobox) {
                            this.fieldsCombobox.setValue(allowedValues.join());
                        }
                    }
                }.bind(this)
            }
        });

        if(this.fieldConfig.considerTenants) {
            this.tenantStore = new Ext.data.JsonStore({
                autoDestroy: true,
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: Routing.generate('pimcore_ecommerceframework_index_getalltenants'),
                    reader: {
                        rootProperty: 'data',
                        idProperty: 'key'
                    }
                },
                fields: ['key', 'name']
            });
        }

    },

    getLayoutEdit: function () {
        if (parseInt(this.fieldConfig.width) < 1) {
            this.fieldConfig.width = 100;
        }
        if (parseInt(this.fieldConfig.height) < 1) {
            this.fieldConfig.height = 100;
        }

        var conf = {
            width: this.fieldConfig.width,
            height: this.fieldConfig.height,
            fieldLabel: this.fieldConfig.title,
            itemCls: "object_field hugo",
            queryDelay: 0,
            triggerAction: 'all',
            resizable: true,
            mode: 'local',
            minChars: 1,
            store: this.store,
            displayField: 'name',
            valueField: 'key',
            forceFormValue: true
        };

        if (this.data) {
            conf.value = this.data;
        }

        this.fieldsCombobox = Ext.create('Ext.form.field.Tag', conf);


        if(this.fieldConfig.considerTenants) {
            this.fieldsCombobox.setFieldLabel("");
            var tenantCombobox = new Ext.form.ComboBox({
                triggerAction: "all",
                fieldLabel: this.fieldConfig.title,
                editable: false,
                store: this.tenantStore,
                valueField: 'key',
                displayField: 'name',
                width: 300,
                listeners: {
                    select: function(combo, record) {
                        this.fieldsCombobox.setValue("");

                        var proxy = this.store.getProxy();
                        proxy.extraParams.tenant = record.data.key;
                        this.store.reload({params: {tenant: record.data.key}});
                    }.bind(this)
                }
            });

            this.component = Ext.create('Ext.form.Panel', {
                layout: {
                    type: 'hbox',
                    align: "middle"
                },
                margin: '0 0 10 0',
                combineErrors: false,
                items: [
                    tenantCombobox,
                    this.fieldsCombobox
                ],
                cls: "object_field object_field_type_" + this.type,
                isDirty: function() {
                    return tenantCombobox.isDirty() || this.fieldsCombobox.isDirty()
                }.bind(this)
            });

        } else {
            this.component = this.fieldsCombobox;
        }

        return this.component;
    },


    getLayoutShow: function () {

        this.component = this.getLayoutEdit();
        this.component.disable();

        return this.component;
    },

    getValue: function () {
        return this.fieldsCombobox.getValue();
    },

    getName: function () {
        return this.fieldConfig.name;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.object.classes.data.indexFieldSelectionCombo");
pimcore.object.classes.data.indexFieldSelectionCombo = Class.create(pimcore.object.classes.data.data, {

    type: "indexFieldSelectionCombo",
    allowIndex: true,

    /**
     * define where this datatype is allowed
     */
    allowIn: {
        object: true,
        objectbrick: true,
        fieldcollection: true,
        localizedfield: true
    },        

    initialize: function (treeNode, initData) {
        this.type = "indexFieldSelectionCombo";

        this.initData(initData);

        this.treeNode = treeNode;
    },

    getTypeName: function () {
        return t("indexFieldSelectionCombo");
    },

    getGroup: function () {
        return "ecommerce";
    },

    getIconClass: function () {
        return "pimcore_icon_indexFieldSelectionCombo";
    },

    getLayout: function ($super) {

        $super();

        this.specificPanel.removeAll();
        this.specificPanel.add([
            {
                xtype: "spinnerfield",
                fieldLabel: t("width"),
                name: "width",
                value: this.datax.width
            },
            {
                xtype: "checkbox",
                fieldLabel: t("specificPriceField"),
                name: "specificPriceField",
                checked: this.datax.specificPriceField
            },
            {
                xtype: "checkbox",
                fieldLabel: t("showAllFields"),
                name: "showAllFields",
                checked: this.datax.showAllFields
            },
            {
                xtype: "checkbox",
                fieldLabel: t("considerTenants"),
                name: "considerTenants",
                checked: this.datax.considerTenants
            }
        ]);
        
        return this.layout;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.object.tags.indexFieldSelectionCombo");
pimcore.object.tags.indexFieldSelectionCombo = Class.create(pimcore.object.tags.select, {

    type: "indexFieldSelectionCombo",

    initialize: function (data, fieldConfig) {
        this.data = data;
        this.fieldConfig = fieldConfig;

        this.store = new Ext.data.JsonStore({
            autoDestroy: true,
            autoLoad: true,
            proxy: {
                type: 'ajax',
                url: Routing.generate('pimcore_ecommerceframework_index_getfields'),
                reader: {
                    rootProperty: 'data',
                    idProperty: 'key'
                },
                extraParams: {class_id: fieldConfig.classId, specific_price_field: this.fieldConfig.specificPriceField, show_all_fields: this.fieldConfig.showAllFields }
            },
            fields: ['key','name'],
            listeners: {
                load: function (store) {
                    if(this.fieldsCombobox) {
                        this.fieldsCombobox.setValue(this.data);
                    }
                }.bind(this)
            }
        });


        if(this.fieldConfig.considerTenants) {
            this.tenantStore = new Ext.data.JsonStore({
                autoDestroy: true,
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: Routing.generate('pimcore_ecommerceframework_index_getalltenants'),
                    reader: {
                        rootProperty: 'data',
                        idProperty: 'key'
                    }
                },
                fields: ['key', 'name']
            });
        }

    },

    getLayoutEdit: function () {

        var options = {
            name: this.fieldConfig.name,
            triggerAction: "all",
            editable: false,
            fieldLabel: this.fieldConfig.title,
            store: this.store,
            valueField: 'key',
            displayField: 'name',
            itemCls: "object_field",
            width: 300
        };

        if (this.fieldConfig.width) {
            options.width = this.fieldConfig.width;
        }

        if (typeof this.data == "string" || typeof this.data == "number") {
            options.value = this.data;
        } else {
            options.value = "";
        }

        this.fieldsCombobox = new Ext.form.ComboBox(options);

        if(this.fieldConfig.considerTenants) {
            this.fieldsCombobox.setFieldLabel("");
            var tenantCombobox = new Ext.form.ComboBox({
                triggerAction: "all",
                fieldLabel: this.fieldConfig.title,
                editable: false,
                store: this.tenantStore,
                valueField: 'key',
                displayField: 'name',
                itemCls: "object_field",
                width: 300,
                listeners: {
                    select: function(combo, record) {
                        this.fieldsCombobox.setValue("");

                        var proxy = this.store.getProxy();
                        proxy.extraParams.tenant = record.data.key;
                        this.store.reload({params: {tenant: record.data.key}});
                    }.bind(this)
                }
            });

            this.component = Ext.create('Ext.form.Panel', {
                layout: {
                    type: 'hbox',
                    align: "middle"
                },
                margin: '0 0 10 0',
                combineErrors: false,

                items: [tenantCombobox, this.fieldsCombobox],
                cls: "object_field",
                isDirty: function() {
                    return tenantCombobox.isDirty() || this.fieldsCombobox.isDirty()
                }.bind(this)
            });

        } else {
            this.component = this.fieldsCombobox;
        }

        return this.component;
    },

    getValue: function() {
        return this.fieldsCombobox.getValue();
    }

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.object.classes.data.indexFieldSelection");
pimcore.object.classes.data.indexFieldSelection = Class.create(pimcore.object.classes.data.data, {

    type: "indexFieldSelection",
    allowIndex: true,

    /**
     * define where this datatype is allowed
     */
    allowIn: {
        object: true,
        objectbrick: true,
        fieldcollection: true,
        localizedfield: true
    },

    initialize: function (treeNode, initData) {
        this.type = "indexFieldSelection";

        this.initData(initData);

        this.treeNode = treeNode;
    },

    getTypeName: function () {
        return t("indexFieldSelection");
    },

    getGroup: function () {
        return "ecommerce";
    },

    getIconClass: function () {
        return "pimcore_icon_indexFieldSelection";
    },

    getLayout: function ($super) {

        $super();
        this.specificPanel.removeAll();

        var filterGroups = Ext.create('Ext.ux.form.MultiSelect', {
            triggerAction: "all",
            fieldLabel: t("filtergroups"),
            editable: false,
            name: "filterGroups",
            store: new Ext.data.JsonStore({
                autoDestroy: true,
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: Routing.generate('pimcore_ecommerceframework_index_getfiltergroups'),
                    reader: {
                        rootProperty: 'data',
                        idProperty: 'key'
                    }
                },
                listeners: {
                    load: function(store) {
                        filterGroups.setValue(this.datax.filterGroups);
                    }.bind(this)
                },
                fields: ['data']
            }),
            valueField: 'data',
            displayField: 'data',
            itemCls: "object_field",
            width: 500
        });

        this.specificPanel.add([
            {
                xtype: "spinnerfield",
                fieldLabel: t("width"),
                name: "width",
                value: this.datax.width
            },
            {
                xtype: "checkbox",
                fieldLabel: t("considerTenants"),
                name: "considerTenants",
                checked: this.datax.considerTenants
            },
            filterGroups,
            {
                xtype: "combo",
                triggerAction: "all",
                fieldLabel: t("preSelectMode"),
                editable: false,
                name: "multiPreSelect",
                mode: 'local',
                store: new Ext.data.ArrayStore({
                    id: 0,
                    fields: [
                        'key',
                        'value'
                    ],
                    data: [
                        ['none', t('none')],
                        ['remote_single', t('remote_single')],
                        ['remote_multi', t('remote_multi')],
                        ['local_single', t('local_single')],
                        ['local_multi', t('local_multi')]
                    ]
                }),
                valueField: 'key',
                displayField: 'value',
                width: 500,
                listeners: {
                    select: function(combo, rec) {
                        if(rec.data.key == "local_single" || rec.data.key == "local_multi") {
                            this.valueGrid.setVisible(true);
                        } else {
                            this.valueGrid.setVisible(false);
                        }

                    }.bind(this)
                },
                value: this.datax.multiPreSelect
            },
            this.getPredefinedListGrid()

        ]);

        return this.layout;
    },

    getPredefinedListGrid: function() {
        if(typeof this.datax.predefinedPreSelectOptions != "object") {
            console.log("dd");
            this.datax.predefinedPreSelectOptions = [];
        }

        this.valueStore = new Ext.data.JsonStore({
            fields: ["key", "value"],
            data: this.datax.predefinedPreSelectOptions
        });

        this.cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });

        this.valueGrid = Ext.create('Ext.grid.Panel', {
            tbar: [{
                xtype: "tbtext",
                text: t("predefined_pre_select_options")
            }, "-", {
                xtype: "button",
                iconCls: "pimcore_icon_add",
                handler: function () {
                    this.valueStore.insert(0, {
                        key: "",
                        value: ""
                    });
                }.bind(this)
            }],
            style: "margin-top: 10px",
            store: this.valueStore,
            hidden: (this.datax.multiPreSelect != "local_single" && this.datax.multiPreSelect != "local_multi"),
            selModel: Ext.create('Ext.selection.RowModel', {}),
            plugins: [
                this.cellEditing
            ],
            columnLines: true,
            columns: [
                {header: t("display_name"), sortable: false, dataIndex: 'key', editor: new Ext.form.TextField({}),
                    width: 200},
                {header: t("value"), sortable: false, dataIndex: 'value', editor: new Ext.form.TextField({}),
                    width: 200},
                {
                    xtype:'actioncolumn',
                    width:40,
                    items:[
                        {
                            tooltip:t('up'),
                            icon:"/bundles/pimcoreadmin/img/flat-color-icons/up.svg",
                            handler:function (grid, rowIndex) {
                                if (rowIndex > 0) {
                                    var rec = grid.getStore().getAt(rowIndex);
                                    grid.getStore().removeAt(rowIndex);
                                    grid.getStore().insert(rowIndex - 1, [rec]);
                                }
                            }.bind(this)
                        }
                    ]
                },
                {
                    xtype:'actioncolumn',
                    width:40,
                    items:[
                        {
                            tooltip:t('down'),
                            icon:"/bundles/pimcoreadmin/img/flat-color-icons/down.svg",
                            handler:function (grid, rowIndex) {
                                if (rowIndex < (grid.getStore().getCount() - 1)) {
                                    var rec = grid.getStore().getAt(rowIndex);
                                    grid.getStore().removeAt(rowIndex);
                                    grid.getStore().insert(rowIndex + 1, [rec]);
                                }
                            }.bind(this)
                        }
                    ]
                },
                {
                    xtype: 'actioncolumn',
                    width: 40,
                    items: [
                        {
                            tooltip: t('remove'),
                            icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                            handler: function (grid, rowIndex) {
                                grid.getStore().removeAt(rowIndex);
                            }.bind(this)
                        }
                    ]
                }
            ],
            autoHeight: true
        });

        return this.valueGrid;
    },
    applyData: function ($super) {

        $super();

        var options = [];

        this.valueStore.commitChanges();
        this.valueStore.each(function (rec) {
            options.push({
                key: rec.get("key"),
                value: rec.get("value")
            });
        });

        this.datax.predefinedPreSelectOptions = options;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.object.tags.indexFieldSelection");
pimcore.object.tags.indexFieldSelection = Class.create(pimcore.object.tags.select, {

    type: "indexFieldSelection",

    initialize: function (data, fieldConfig) {
        if(data) {
            this.data = data;
        } else {
            this.data = {};
        }
        this.fieldConfig = fieldConfig;

        this.store = new Ext.data.JsonStore({
            autoDestroy: true,
            autoLoad: true,
            proxy: {
                type: 'ajax',
                url: Routing.generate('pimcore_ecommerceframework_index_getfields'),
                reader: {
                    rootProperty: 'data',
                    idProperty: 'key'
                },
                extraParams: {class_id: fieldConfig.classId, add_empty: !this.fieldConfig.mandatory, "filtergroup[]": this.fieldConfig.filterGroups }
            },
            fields: ['key', 'name']
        });

        if(this.fieldConfig.multiPreSelect == 'remote_single' || this.fieldConfig.multiPreSelect == 'remote_multi') {
            this.preSelectStore = new Ext.data.JsonStore({
                autoDestroy: true,
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: Routing.generate('pimcore_ecommerceframework_index_getvaluesforfilterfield'),
                    reader: {
                        rootProperty: 'data',
                        idProperty: 'key'
                    },
                    extraParams: {
                        tenant: this.data ? this.data.tenant : "",
                        field: this.data ? this.data.field : ""
                    }
                },
                listeners: {
                    load: function(store) {
                        if(this.data) {
                            if(this.preSelectCombobox.rendered) {
                                this.preSelectCombobox.setValue(this.data.preSelect);
                            } else {
                                this.preSelectCombobox.addListener("afterRender", function() {
                                    this.preSelectCombobox.setValue(this.data.preSelect);
                                }.bind(this));
                            }
                        }
                    }.bind(this)
                },
                fields: ['key', 'value']

            });
        } else if(this.fieldConfig.multiPreSelect == 'local_single' || this.fieldConfig.multiPreSelect == 'local_multi') {
            this.preSelectStore = new Ext.data.JsonStore({
                autoDestroy: true,
                data: this.fieldConfig.predefinedPreSelectOptions,
                proxy: {
                    type: 'memory'
                },
                fields: ['key', 'value']
            });
        }

        if(this.fieldConfig.considerTenants) {
            this.tenantStore = new Ext.data.JsonStore({
                autoDestroy: true,
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: Routing.generate('pimcore_ecommerceframework_index_getalltenants'),
                    reader: {
                        rootProperty: 'data',
                        idProperty: 'key'
                    }
                },
                listeners: {
                    load: function(store) {
                        if(this.data) {
                            if(this.tenantCombobox.rendered) {
                                this.tenantCombobox.setValue(this.data.tenant);
                            } else {
                                this.tenantCombobox.addListener("afterRender", function() {
                                    this.tenantCombobox.setValue(this.data.tenant);
                                }.bind(this));
                            }
                        }
                    }.bind(this)
                },
                fields: ['key', 'name']
            });
        }

    },

    getLayoutEdit: function () {

        var options = {
            name: this.fieldConfig.name,
            triggerAction: "all",
            editable: false,
            fieldLabel: this.fieldConfig.title,
            store: this.store,
            valueField: 'key',
            displayField: 'name',
            itemCls: "object_field",
            listeners: {
                select: function(combo, record) {
                    if(this.data && this.data.preSelect) {
                        this.data.preSelect = "";
                    }

                    if(this.fieldConfig.multiPreSelect == 'remote_single' || this.fieldConfig.multiPreSelect == 'remote_multi') {
                        var proxy = this.preSelectStore.getProxy();
                        proxy.extraParams.field = record.data.key;
                        var params = {field: record.data.key};
                        if(this.tenantCombobox) {
                            proxy.extraParams.tenant = this.tenantCombobox.getValue();
                            params.tenant = this.tenantCombobox.getValue();
                        }
                        this.preSelectStore.reload({params: params});
                    }
                }.bind(this)
            },
            width: 300
        };

        if (this.fieldConfig.width) {
            options.width = this.fieldConfig.width;
        }

        if(this.data) {
            options.value = this.data.field;
        }

        this.fieldsCombobox = new Ext.form.ComboBox(options);

        var panel = new Ext.form.FormPanel({
            border: false
        });

        if(this.fieldConfig.considerTenants) {
            this.fieldsCombobox.setFieldLabel("");
            this.tenantCombobox = new Ext.form.ComboBox({
                triggerAction: "all",
                data: (this.data ? this.data.tenant : ""),
                editable: false,
                store: this.tenantStore,
                fieldLabel: this.fieldConfig.title,
                valueField: 'key',
                displayField: 'name',
                itemCls: "object_field",
                width: 300,
                listeners: {
                    select: function(combo, record) {
                        this.fieldsCombobox.setValue("");

                        var proxy = this.store.getProxy();
                        proxy.extraParams.tenant = record.data.key;
                        this.store.reload({params: {tenant: record.data.key}});

                    }.bind(this)
                }
            });

            panel.add(Ext.create('Ext.form.Panel', {
                layout: {
                    type: 'hbox',
                    align: "middle"
                },
                margin: '0 0 10 0',
                combineErrors: false,
                cls: "object_field",
                isDirty: function() {
                    return this.tenantCombobox.isDirty() || this.fieldsCombobox.isDirty()
                }.bind(this),
                items: [
                    this.tenantCombobox,
                    this.fieldsCombobox
                ]
            }));

        } else {
            panel.add(this.fieldsCombobox);
        }

        if(this.fieldConfig.multiPreSelect == 'remote_multi' || this.fieldConfig.multiPreSelect == 'local_multi') {
            this.preSelectCombobox = new Ext.ux.form.MultiSelect({
                triggerAction: "all",
                fieldLabel: t("preSelect"),
                editable: false,
                name: "preSelect",
                store: this.preSelectStore,
                valueField: 'key',
                displayField: 'value',
                itemCls: "object_field",
                height: 300,
                width: (this.fieldConfig.width ? this.fieldConfig.width : 300) + (this.fieldConfig.considerTenants ? 300 : 0)
            });

            panel.add(this.preSelectCombobox);
        } else if(this.fieldConfig.multiPreSelect == 'remote_single' || this.fieldConfig.multiPreSelect == 'local_single') {
            this.preSelectCombobox = new Ext.form.ComboBox({
                triggerAction: "all",
                fieldLabel: t("preSelect"),
                editable: false,
                name: "preSelect",
                store: this.preSelectStore,
                valueField: 'key',
                displayField: 'value',
                itemCls: "object_field",
                width: (this.fieldConfig.width ? this.fieldConfig.width : 300) + (this.fieldConfig.considerTenants ? 300 : 0)
            });
            panel.add(this.preSelectCombobox);
        }

        if(this.fieldConfig.multiPreSelect == 'local_single' || this.fieldConfig.multiPreSelect == 'local_multi') {
            if(this.preSelectCombobox.rendered) {
                this.preSelectCombobox.setValue(this.data.preSelect);
            } else {
                this.preSelectCombobox.addListener("afterRender", function() {
                    this.preSelectCombobox.setValue(this.data.preSelect);
                }.bind(this));
            }
        }

        this.component = panel;
        return this.component;
    },

    getValue: function () {
        var value = {
            tenant: (this.tenantCombobox ? this.tenantCombobox.getValue() : null),
            field: this.fieldsCombobox.getValue(),
            preSelect: (this.preSelectCombobox ? this.preSelectCombobox.getValue() : null)
        };
        return value;
    },

    isDirty: function() {
        return this.fieldsCombobox.isDirty() || (this.preSelectCombobox && this.preSelectCombobox.isDirty());
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


document.addEventListener(pimcore.events.pimcoreReady, (e) => {
    const perspectiveCfg = pimcore.globalmanager.get("perspective");

    if (!perspectiveCfg.inToolbar("ecommerce")) {
        return
    }

    const toolbar = pimcore.globalmanager.get("layout_toolbar");

    // init
    let menuItems = toolbar.ecommerceMenu;
    if (!menuItems) {
        menuItems = new Ext.menu.Menu({
            cls: "pimcore_navigation_flyout",
            listeners: {
                "show": function (e) {
                    Ext.get('pimcore_menu_ecommerce').addCls('active');
                },
                "hide": function (e) {
                    Ext.get('pimcore_menu_ecommerce').removeCls('active');
                }
            }
        });
        toolbar.ecommerceMenu = menuItems;
    }

    const user = pimcore.globalmanager.get("user");

    let config = pimcore.bundle.EcommerceFramework.config;

    // pricing rules
    if (perspectiveCfg.inToolbar("ecommerce.rules") && user.isAllowed("bundle_ecommerce_pricing_rules") && (!config.menu || config.menu.pricing_rules.enabled)) {
        // add pricing rules to menu
        // create item
        const pricingPanelId = "bundle_ecommerce_pricing_config";
        const item = {
            text: t("bundle_ecommerce_pricing_rules"),
            iconCls: "pimcore_nav_icon_commerce_pricing_rules",
            handler: function () {
                try {
                    pimcore.globalmanager.get(pricingPanelId).activate();
                }
                catch (e) {
                    pimcore.globalmanager.add(pricingPanelId, new pimcore.bundle.EcommerceFramework.pricing.config.panel(pricingPanelId));
                }
            }
        };

        // add to menu
        menuItems.add(item);
    }

    // order backend
    if (perspectiveCfg.inToolbar("ecommerce.orderbackend") && user.isAllowed("bundle_ecommerce_back-office_order") && (!config.menu || config.menu.order_list.enabled)) {
        // create item
        const orderPanelId = "bundle_ecommerce_back-office_order";
        const item = {
            text: t("bundle_ecommerce_back-office_order"),
            iconCls: "pimcore_nav_icon_commerce_backoffice",
            handler: function () {
                try {
                    pimcore.globalmanager.get(orderPanelId).activate();
                }
                catch (e) {
                    pimcore.globalmanager.add(orderPanelId, new pimcore.tool.genericiframewindow(orderPanelId, config.menu.order_list.route, "bundle_ecommerce_back-office_order", t('bundle_ecommerce_back-office_order')));
                }
            }
        };

        // add to menu
        menuItems.add(item);
    }

    if (menuItems.items.length > 0) {
        initializeMenu(toolbar, menuItems);
    }
});

function initializeMenu(toolbar, menuItems) {
    // add e-commerce framework main menu
    let navEl = Ext.get('pimcore_menu_ecommerce');
    navEl.show();
    navEl.on("mousedown", toolbar.showSubMenu.bind(menuItems));

    pimcore.helpers.initMenuTooltips();
}

document.addEventListener(pimcore.events.postOpenObject, (e) => {
    if (pimcore.globalmanager.get("user").isAllowed("bundle_ecommerce_pricing_rules")) {

        if (e.detail.type == "object" && e.detail.object.data.general.o_className == "OnlineShopVoucherSeries") {
            const tab = new pimcore.bundle.EcommerceFramework.VoucherSeriesTab(e.detail.object, e.detail.type);

            e.detail.object.tab.items.items[1].insert(1, tab.getLayout());
            e.detail.object.tab.items.items[1].updateLayout();
            pimcore.layout.refresh();
        }
    }
    if (pimcore.globalmanager.get("user").isAllowed("bundle_ecommerce_back-office_order")) {

        if (e.detail.type == "object" && e.detail.object.data.general.o_className == "OnlineShopOrder") {
            const tab = new pimcore.bundle.EcommerceFramework.OrderTab(e.detail.object, e.detail.type);
            e.detail.object.tab.items.items[1].insert(0, tab.getLayout());
            e.detail.object.tab.items.items[1].updateLayout();
            e.detail.object.tab.items.items[1].setActiveTab(0);
            pimcore.layout.refresh();
        }
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.EcommerceFramework.pricing.config.panel");

pimcore.bundle.EcommerceFramework.pricing.config.panel = Class.create({

    /**
     * @var string
     */
    layoutId: "",

    /**
     * @var array
     */
    condition: [],

    /**
     * @var array
     */
    action: [],

    /**
     * panels of open pricing rules
     */
    panels: {},


    /**
     * constructor
     * @param layoutId
     */
    initialize: function(layoutId) {
        this.layoutId = layoutId;

        // load defined conditions & actions
        var _this = this;
        Ext.Ajax.request({
            url: Routing.generate('pimcore_ecommerceframework_pricing_get-config'),
            method: "GET",
            success: function(result){
                var config = Ext.decode(result.responseText);
                _this.condition = config.condition;
                _this.action = config.action;
            }
        });

        // create layout
        this.getLayout();
    },


    /**
     * activate panel
     */
    activate: function () {
        var tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.setActiveItem( this.layoutId );
    },


    /**
     * create tab panel
     * @returns Ext.Panel
     */
    getLayout: function () {

        if (!this.layout) {

            // create new panel
            this.layout = new Ext.Panel({
                id: this.layoutId,
                title: t("bundle_ecommerce_pricing_rules"),
                iconCls: "bundle_ecommerce_pricing_rules",
                border: false,
                layout: "border",
                closable: true,

                // layout...
                items: [
                    this.getTree(),         // item tree, left side
                    this.getTabPanel()    // edit page, right side
                ]
            });

            // add event listener
            var layoutId = this.layoutId;
            this.layout.on("destroy", function () {
                pimcore.globalmanager.remove( layoutId );
            }.bind(this));

            // add panel to pimcore panel tabs
            var tabPanel = Ext.getCmp("pimcore_panel_tabs");
            tabPanel.add( this.layout );
            tabPanel.setActiveItem( this.layoutId );

            // update layout
            pimcore.layout.refresh();
        }

        return this.layout;
    },


    /**
     * return treelist
     * @returns {*}
     */
    getTree: function () {
        if (!this.tree) {
            this.saveButton = new Ext.Button({
                // save button
                hidden: true,
                text: t("save"),
                iconCls: "pimcore_icon_save",
                handler: function() {
                    // this
                    var button = this;

                    // get current order
                    var prio = 0;
                    var rules = {};

                    this.ownerCt.ownerCt.getRootNode().eachChild(function (rule){
                        prio++;
                        rules[ rule.id ] = prio;
                    });

                    // save order
                    Ext.Ajax.request({
                        url: Routing.generate('pimcore_ecommerceframework_pricing_save-order'),
                        params: {
                            rules: Ext.encode(rules)
                        },
                        method: "PUT",
                        success: function(){
                            button.hide();
                        }
                    });

                }
            });

            var store = Ext.create('Ext.data.TreeStore', {
                autoLoad: false,
                autoSync: true,
                proxy: {
                    type: 'ajax',
                    url: Routing.generate('pimcore_ecommerceframework_pricing_list'),
                    reader: {
                        type: 'json'
                    }
                }
            });

            this.tree = new Ext.tree.TreePanel({
                store: store,
                region: "west",
                useArrows:true,
                autoScroll:true,
                animate:true,
                containerScroll: true,
                width: 200,
                split: true,
                rootVisible: false,
                viewConfig: {
                    plugins: {
                        ptype: 'treeviewdragdrop'
                    }
                },
                listeners: {
                    itemclick: this.openRule.bind(this),
                    itemcontextmenu: function (tree, record, item, index, e, eOpts ) {
                        tree.select();

                        var menu = new Ext.menu.Menu();
                        menu.add(new Ext.menu.Item({
                            text: t('delete'),
                            iconCls: "pimcore_icon_delete",
                            handler: this.deleteRule.bind(this, tree, record)
                        }));

                        menu.add(new Ext.menu.Item({
                            text: t('copy'),
                            iconCls: "pimcore_icon_copy",
                            handler: this.copyRule.bind(this, tree, record)
                        }));

                        menu.add(new Ext.menu.Item({
                            text: t('rename'),
                            iconCls: "pimcore_icon_key pimcore_icon_overlay_go",
                            handler: this.renameRule.bind(this, tree, record)
                        }));

                        e.stopEvent();
                        menu.showAt(e.pageX, e.pageY);
                    }.bind(this),
                    'beforeitemappend': function (thisNode, newChildNode, index, eOpts) {
                        newChildNode.data.leaf = true;
                    },
                    itemmove: function(tree, oldParent, newParent, index, eOpts ) {
                        this.saveButton.show();
                    }.bind(this)
                },
                tbar: {
                    items: [
                        {
                            // add button
                            text: t("add"),
                            iconCls: "pimcore_icon_add",
                            handler: this.addRule.bind(this)
                        }, {
                            // spacer
                            xtype: 'tbfill'
                        }, this.saveButton
                    ]
                }
            });

            this.tree.on("render", function () {
                this.getRootNode().expand();
            });
        }

        return this.tree;
    },


    /**
     * add item popup
     */
    addRule: function () {
        Ext.MessageBox.prompt(t('bundle_ecommerce_pricing_rule_add'), t('enter_the_name_of_the_new_item'),
            this.addRuleComplete.bind(this), null, null, "");
    },


    /**
     * save added item
     * @param button
     * @param value
     * @param object
     * @todo ...
     */
    addRuleComplete: function (button, value, object) {

        var regresult = value.match(/[a-zA-Z0-9_\-]+/);
        if (button == "ok" && value.length > 2 && regresult == value) {
            Ext.Ajax.request({
                url: Routing.generate('pimcore_ecommerceframework_pricing_add'),
                method: 'POST',
                params: {
                    name: value,
                    documentId: (this.page ? this.page.id : null)
                },
                success: function (response) {
                    var data = Ext.decode(response.responseText);

                    this.refresh(this.tree.getRootNode());

                    if(!data || !data.success) {
                        Ext.Msg.alert(t('bundle_ecommerce_pricing_rule_add'), t('bundle_ecommerce_pricing_rule_error'));
                    } else {
                        this.openRule(null, intval(data.id));
                    }
                }.bind(this)
            });
        } else if (button == "cancel") {
            return;
        }
        else {
            Ext.Msg.alert(t('bundle_ecommerce_pricing_rule_add'), t('invalid_name'));
        }
    },

    refresh: function (record) {
        var ownerTree = record.getOwnerTree();
        record.data.expanded = true;
        ownerTree.getStore().load({
            node: record
        });
    },
    /**
     * delete existing rule
     */
    deleteRule: function (tree, record) {
        pimcore.helpers.deleteConfirm(t('bundle_ecommerce_pricing_rule'), record.data.text, function () {
            Ext.Ajax.request({
                url: Routing.generate('pimcore_ecommerceframework_pricing_delete'),
                method: 'DELETE',
                params: {
                    id: record.id
                },
                success: function () {
                    this.refresh(this.tree.getRootNode());
                }.bind(this)
            });
        }.bind(this));

    },

    /**
     * copy pricing rule
     * @param tree
     * @param record
     */
    copyRule: function (tree, record) {
        Ext.Ajax.request({
            url: Routing.generate('pimcore_ecommerceframework_pricing_copy'),
            method: 'POST',
            params: {
                id: record.id
            },
            success: function () {
                this.refresh(this.tree.getRootNode());
            }.bind(this)
        });
    },

    /**
     * rename pricing rule popup
     * @param tree
     * @param record
     */
    renameRule: function (tree, record) {

        let options = {
            tree: tree,
            id: record.id,
        };

        Ext.MessageBox.prompt(t('rename'), t('enter_the_name_of_the_new_item'),
            this.renameRuleComplete.bind(this, options), null, null, record.data.text);
    },

    /**
     * rename pricing rule
     * @param button
     * @param value
     * @param object
     */
    renameRuleComplete: function (options, button, value, object) {

        if (button == 'ok') {

            if(value.match(/^[a-zA-Z0-9_\-]+$/)) {
                let tree = options.tree;

                Ext.Ajax.request({
                    url: Routing.generate('pimcore_ecommerceframework_pricing_rename'),
                    method: 'PUT',
                    params: {
                        id: options.id,
                        name: value
                    },
                    success: function (response, opts) {

                        let responseData = Ext.decode(response.responseText);

                        if (responseData.success) {
                            this.refresh(this.tree.getRootNode());
                        } else {
                            Ext.MessageBox.alert(t('rename'), t('name_already_in_use'));
                        }
                    }.bind(this)
                });
            } else {
                Ext.Msg.alert(t('rename'), t('invalid_name'));
            }
        }
    },

    /**
     * open pricing rule
     * @param node
     */
    openRule: function (tree, record, item, index, e, eOpts ) {

        if(!is_numeric(record)) {
            record = record.id;
        }

        //try {
            var pricingRuleKey = "pricingrule_" + record;
            if (this.panels[pricingRuleKey]) {
                this.panels[pricingRuleKey].activate();
            } else {
                // load defined rules
                Ext.Ajax.request({
                    url: Routing.generate('pimcore_ecommerceframework_pricing_get'),
                    params: {
                        id: record
                    },
                    success: function (response) {
                        var res = Ext.decode(response.responseText);
                        var item = new pimcore.bundle.EcommerceFramework.pricing.config.item(this, res);
                        this.panels[pricingRuleKey] = item;
                    }.bind(this)
                });
            }
        //} catch (e) {
        //    console.log(e);
        //}



    },


    /**
     * @returns Ext.TabPanel
     */
    getTabPanel: function () {
        if (!this.panel) {
            this.panel = new Ext.TabPanel({
                region: "center",
                border: false
            });
        }

        return this.panel;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.EcommerceFramework.pricing.config.item");
pimcore.bundle.EcommerceFramework.pricing.config.item = Class.create({

    /**
     * pimcore.bundle.EcommerceFramework.pricing.config.panel
     */
    parent: {},


    /**
     * constructor
     * @param parent
     * @param data
     */
    initialize: function(parent, data) {
        this.parent = parent;
        this.data = data;
        this.currentIndex = 0;

        this.tabPanel = new Ext.TabPanel({
            title: this.data.name,
            closable: true,
            deferredRender: false,
            forceLayout: true,
            id: "pimcore_pricing_panel_" + this.data.id,
            buttons: [{
                text: t("save"),
                iconCls: "pimcore_icon_apply",
                handler: this.save.bind(this)
            }],
            items: [
                this.getSettings(),
                this.getConditions(),
                this.getActions()
            ]
        });
        this.tabPanel.on("beforedestroy", function () {
            delete this.parent.panels["pricingrule_" + this.data.id];
        }.bind(this));


        // add saved conditions
        if(this.data.condition)
        {
            var list = this;
            var level = 0;
            var open = 0;
            var handleCondition = function(condition){
                if(condition.type == 'Bracket')
                {
                    // workarround for brackets
                    level++;
                    Ext.each(condition.conditions, function(item, index, allItems){
                        item.condition.operator = item.operator;

                        if(level > 1)
                        {
                            if(index == 0)
                            {
                                item.condition.bracketLeft = true;
                                open++;
                            }
                            if(index == allItems.length -1 && open > 0)
                            {
                                item.condition.bracketRight = true;
                                open--;
                            }
                        }

                        handleCondition(item.condition);
                    });
                }
                else
                {
                    // normal condition
                    list.addCondition("condition" + ucfirst(condition.type), condition);
                }
            };

            handleCondition(this.data.condition);
        }

        // add saved actions
        if(this.data.actions)
        {
            var list = this;
            Ext.each(this.data.actions, function(action){
                list.addAction("action" + ucfirst(action.type), action);
            });
        }

        // ...
        var panel = this.parent.getTabPanel();
        panel.add(this.tabPanel);
        panel.setActiveTab(this.tabPanel);
        panel.updateLayout();
    },

    activate: function () {
        var panel = this.parent.getTabPanel();
        panel.setActiveTab(this.tabPanel);
        panel.updateLayout();
    },

    /**
     * Basic rule Settings
     * @returns Ext.form.FormPanel
     */
    getSettings: function () {
        var data = this.data;

        // create tabs for available languages
        var langTabs = [];
        Ext.each(pimcore.settings.websiteLanguages, function(lang){
            var tab = {
                title: pimcore.available_languages[ lang ],
                items: [{
                    xtype: "textfield",
                    name: "label." + lang,
                    fieldLabel: t("label"),
                    width: 350,
                    value: data.label[ lang ]
                }, {
                    xtype: "textarea",
                    name: "description." + lang,
                    fieldLabel: t("description"),
                    width: 500,
                    height: 100,
                    value: data.description[ lang ]
                }]
            };

            langTabs.push( tab );
        });

        // ...
        this.settingsForm = new Ext.form.FormPanel({
            title: t("settings"),
            bodyStyle: "padding:10px;",
            autoScroll: true,
            //border:false,
            items: [{
                style: "margin-bottom: 10px",
                cls: "object_localizedfields_panel",
                xtype: 'panel',
                items: [{
                    xtype: "tabpanel",
                    defaults: {
                        autoHeight:true
                        ,
                        bodyStyle:'padding:10px;'
                    },
                    items: langTabs
                }]
                }, {
                name: "behavior",
                fieldLabel: t("bundle_ecommerce_pricing_config_behavior"),
                xtype: "combo",
                store: [
                    ["additiv", t("bundle_ecommerce_pricing_config_additiv")],
                    ["stopExecute", t("bundle_ecommerce_pricing_config_stopExecute")]
                ],
                mode: "local",
                width: 300,
                editable: false,
                value: this.data.behavior,
                triggerAction: "all"
            }, {
                xtype: "checkbox",
                name: "active",
                fieldLabel: t("active"),
                checked: this.data.active == "1"
            }]
        });

        return this.settingsForm;
    },

    /**
     * @returns Ext.Panel
     */
    getConditions: function() {

        // init
        var _this = this;
        var addMenu = [];
        var itemTypes = Object.keys(pimcore.bundle.EcommerceFramework.pricing.conditions);
        // show only defined conditions
        Ext.each(this.parent.condition, function (condition) {
            var method = "condition" + condition;
            if(itemTypes.indexOf(method) != -1)
            {
                addMenu.push({
                    iconCls: "bundle_ecommerce_pricing_icon_" + method,
                    text: pimcore.bundle.EcommerceFramework.pricing.conditions[method](null, null,true),
                    handler: _this.addCondition.bind(_this, method)
                });
            }
        });


        this.conditionsContainer = new Ext.Panel({
            title: t("conditions"),
            autoScroll: true,
            forceLayout: true,
            tbar: [{
                iconCls: "pimcore_icon_add",
                menu: addMenu
            }],
            border: false
        });

        return this.conditionsContainer;
    },

    /**
     * @returns {*}
     * @todo
     */
    getActions: function () {

        // init
        var _this = this;
        var addMenu = [];
        var itemTypes = Object.keys(pimcore.bundle.EcommerceFramework.pricing.actions);

        // show only defined actions
        Ext.each(this.parent.action, function (action) {
            var method = "action" + action;
            if(itemTypes.indexOf(method) != -1)
            {
                addMenu.push({
                    iconCls: "bundle_ecommerce_pricing_icon_" + method,
                    text: pimcore.bundle.EcommerceFramework.pricing.actions[method](null, null,true),
                    handler: _this.addAction.bind(_this, method)
                });
            }
        });


        this.actionsContainer = new Ext.Panel({
            title: t("actions"),
            autoScroll: true,
            forceLayout: true,
            bodyStyle: 'padding: 0 10px 10px 10px;',
            tbar: [{
                iconCls: "pimcore_icon_add",
                menu: addMenu
            }],
            border: false
        });

        return this.actionsContainer;
    },


    /**
     * add condition item
     * @param type
     * @param data
     */
    addCondition: function (type, data) {

        // create condition
        var item = pimcore.bundle.EcommerceFramework.pricing.conditions[type](this, data);

        // add logic for brackets
        var tab = this;
        item.on("afterrender", function (el) {
            el.getEl().applyStyles({position: "relative", "min-height": "40px", "border-bottom": "1px solid #d0d0d0"});
            var leftBracket = el.getEl().insertHtml("beforeEnd",
                '<div class="pimcore_targeting_bracket pimcore_targeting_bracket_left">(</div>', true);
            var rightBracket = el.getEl().insertHtml("beforeEnd",
                '<div class="pimcore_targeting_bracket pimcore_targeting_bracket_right">)</div>', true);

            if(data["bracketLeft"]){
                leftBracket.addCls("pimcore_targeting_bracket_active");
            }
            if(data["bracketRight"]){
                rightBracket.addCls("pimcore_targeting_bracket_active");
            }

            // open
            leftBracket.on("click", function (ev, el) {
                var bracket = Ext.get(el);
                bracket.toggleCls("pimcore_targeting_bracket_active");

                tab.recalculateBracketIdent(tab.conditionsContainer.items);
            });

            // close
            rightBracket.on("click", function (ev, el) {
                var bracket = Ext.get(el);
                bracket.toggleCls("pimcore_targeting_bracket_active");

                tab.recalculateBracketIdent(tab.conditionsContainer.items);
            });

            // make ident
            tab.recalculateBracketIdent(tab.conditionsContainer.items);
        });

        this.conditionsContainer.add(item);
        item.updateLayout();
        this.conditionsContainer.updateLayout();

        this.currentIndex++;

        this.recalculateButtonStatus();
    },

    /**
     * add action item
     * @param type
     * @param data
     */
    addAction: function (type, data) {

        var item = pimcore.bundle.EcommerceFramework.pricing.actions[type](this, data);

        this.actionsContainer.add(item);
        item.updateLayout();
        this.actionsContainer.updateLayout();
    },

    /**
     * save config
     */
    save: function () {
        var saveData = {};

        // general settings
        saveData["settings"] = this.settingsForm.getForm().getFieldValues();

        // get defined conditions
        var conditionsData = [];
        var operator;
        var conditions = this.conditionsContainer.items.getRange();
        for (var i=0; i<conditions.length; i++) {
            var condition = {};

            // collect condition settings
            for(var c=0; c<conditions[i].items.length; c++)
            {
                var item = conditions[i].items.getAt(c);

                try {
                    // workaround for pimcore.object.tags.objects
                    if(item.reference)
                    {
                        condition[ item.reference.getName() ] = item.reference.getValue();
                    }
                    else if(item.form)
                    {
                        condition[ item.name ] = item.getForm().getFieldValues();
                    }
                    else if(item.xtype === 'datefield')
                    {
                        condition[ item.name ] = item.getSubmitValue();
                    }
                    else
                    {
                        condition[ item.getName() ] = item.getValue();

                    }
                } catch (e){}

            }
            condition['type'] = conditions[i].type;

            // get the operator (AND, OR, AND_NOT)
            var tb = conditions[i].getDockedItems()[0];
            if (tb.getComponent("toggle_or").pressed) {
                operator = "or";
            } else if (tb.getComponent("toggle_and_not").pressed) {
                operator = "and_not";
            } else {
                operator = "and";
            }
            condition["operator"] = operator;

            // get the brackets
            condition["bracketLeft"] = Ext.get(conditions[i].getEl().query(".pimcore_targeting_bracket_left")[0])
                                                                .hasCls("pimcore_targeting_bracket_active");
            condition["bracketRight"] = Ext.get(conditions[i].getEl().query(".pimcore_targeting_bracket_right")[0])
                                                                .hasCls("pimcore_targeting_bracket_active");

            conditionsData.push(condition);
        }
        saveData["conditions"] = conditionsData;

        // get defined actions
        var actionData = [];
        var actions = this.actionsContainer.items.getRange();
        for (let i=0; i<actions.length; i++) {
            let action = {};
            action = actions[i].getForm().getFieldValues();
            action['type'] = actions[i].type;

            if (!actions[i].getForm().isValid()) {
                console.error('Price action invalid');
                return;
            }

            actionData.push(action);
        }
        saveData["actions"] = actionData;

        // send data
        Ext.Ajax.request({
            url: Routing.generate('pimcore_ecommerceframework_pricing_save'),
            params: {
                id: this.data.id,
                data: Ext.encode(saveData)
            },
            method: "PUT",
            success: this.saveOnComplete.bind(this)
        });
    },

    /**
     * saved
     */
    saveOnComplete: function (response) {
        this.parent.refresh(this.parent.getTree().getRootNode());

        var response = Ext.decode(response.responseText);

        if (response.success) {
            pimcore.helpers.showNotification(t("success"), t("saved_successfully"), "success");
        } else {
            pimcore.helpers.showNotification(t("error"), t(response.message), "error", );
        }
    },

    recalculateButtonStatus: function () {
        var conditions = this.conditionsContainer.items.getRange();
        for (var i=0; i<conditions.length; i++) {
            var tb = conditions[i].getDockedItems()[0];
            if(i==0) {
                tb.getComponent("toggle_and").hide();
                tb.getComponent("toggle_or").hide();
                tb.getComponent("toggle_and_not").hide();
            } else {
                tb.getComponent("toggle_and").show();
                tb.getComponent("toggle_or").show();
                tb.getComponent("toggle_and_not").show();
            }
        }
    },

    /**
     * make ident for bracket
     * @param list
     */
    recalculateBracketIdent: function(list) {
        var ident = 0, lastIdent = 0, margin = 20;
        var colors = ["transparent","#007bff", "#00ff99", "#e1a6ff", "#ff3c00", "#000000"];

        list.each(function (condition) {

            // only rendered conditions
            if(condition.rendered == false) {
                return;
            }

            // html from this condition
            var item = condition.getEl();


            // apply ident margin
            item.applyStyles({
                "margin-left": margin * ident + "px",
                "margin-right": margin * ident + "px"
            });


            // apply colors
            if(ident > 0) {
                item.applyStyles({
                    "border-left": "1px solid " + colors[ident],
                    "border-right": "1px solid " + colors[ident]
                });
            } else {
                item.applyStyles({
                    "border-left": "0px",
                    "border-right": "0px"
                });
            }


            // apply specials :-)
            if(ident == 0) {
                item.applyStyles({
                    "margin-top": "10px"
                });
            } else if(ident == lastIdent) {
                item.applyStyles({
                    "margin-top": "0px",
                    "margin-bottom": "0px"
                });
            } else {
                item.applyStyles({
                    "margin-top": "5px"
                });
            }


            // remember current ident
            lastIdent = ident;


            // check if a bracket is open
            if(item.select('.pimcore_targeting_bracket_left.pimcore_targeting_bracket_active').getCount() == 1)
            {
                ident++;
            }
            // check if a bracket is close
            else if(item.select('.pimcore_targeting_bracket_right.pimcore_targeting_bracket_active').getCount() == 1)
            {
                if(ident > 0) {
                    ident--;
                }
            }
        });

        this.conditionsContainer.updateLayout();
    }
});


/**
 * CONDITION TYPES
 */
pimcore.registerNS("pimcore.bundle.EcommerceFramework.pricing.conditions");
pimcore.bundle.EcommerceFramework.pricing.conditions = {

    detectBlockIndex: function (blockElement, container) {
        // detect index
        var index;

        for(var s=0; s<container.items.items.length; s++) {
            if(container.items.items[s].getId() == blockElement.getId()) {
                index = s;
                break;
            }
        }
        return index;
    },

    /**
     * @param name
     * @param index
     * @param parent
     * @param data
     * @param iconCls
     * @returns {Array}
     * @todo idents berechnung ausführen wenn eine condition verschoben wird
     */
    getTopBar: function (name, index, parent, data, iconCls) {

        var toggleGroup = "g_" + index + parent.data.id;
        if(!data["operator"]) {
            data.operator = "and";
        }

        return [{
            iconCls: iconCls,
            disabled: true
        }, {
            xtype: "tbtext",
            text: "<b>" + name + "</b>"
        },"-",{
            iconCls: "pimcore_icon_up",
            handler: function (blockId, parent) {

                var container = parent.conditionsContainer;
                var blockElement = Ext.getCmp(blockId);
                var index = pimcore.bundle.EcommerceFramework.pricing.conditions.detectBlockIndex(blockElement, container);
                var tmpContainer = pimcore.viewport;

                var newIndex = index-1;
                if(newIndex < 0) {
                    newIndex = 0;
                }

                // move this node temorary to an other so ext recognizes a change
                container.remove(blockElement, false);
                tmpContainer.add(blockElement);
                container.updateLayout();
                tmpContainer.updateLayout();

                // move the element to the right position
                tmpContainer.remove(blockElement,false);
                container.insert(newIndex, blockElement);
                container.updateLayout();
                tmpContainer.updateLayout();

                parent.recalculateButtonStatus();

                pimcore.layout.refresh();

                parent.recalculateBracketIdent(parent.conditionsContainer.items);
            }.bind(window, index, parent)
        },{
            iconCls: "pimcore_icon_down",
            handler: function (blockId, parent) {

                var container = parent.conditionsContainer;
                var blockElement = Ext.getCmp(blockId);
                var index = pimcore.bundle.EcommerceFramework.pricing.conditions.detectBlockIndex(blockElement, container);
                var tmpContainer = pimcore.viewport;

                // move this node temorary to an other so ext recognizes a change
                container.remove(blockElement, false);
                tmpContainer.add(blockElement);
                container.updateLayout();
                tmpContainer.updateLayout();

                // move the element to the right position
                tmpContainer.remove(blockElement,false);
                container.insert(index+1, blockElement);
                container.updateLayout();
                tmpContainer.updateLayout();

                parent.recalculateButtonStatus();

                pimcore.layout.refresh();
                parent.recalculateBracketIdent(parent.conditionsContainer.items);

            }.bind(window, index, parent)
        },"-", {
            text: t("AND"),
            toggleGroup: toggleGroup,
            enableToggle: true,
            itemId: "toggle_and",
            pressed: (data.operator == "and") ? true : false
        },{
            text: t("OR"),
            toggleGroup: toggleGroup,
            enableToggle: true,
            itemId: "toggle_or",
            pressed: (data.operator == "or") ? true : false
        },{
            text: t("AND_NOT"),
            toggleGroup: toggleGroup,
            enableToggle: true,
            itemId: "toggle_and_not",
            pressed: (data.operator == "and_not") ? true : false
        },"->",{
            iconCls: "pimcore_icon_delete",
            handler: function (index, parent) {
                parent.conditionsContainer.remove(Ext.getCmp(index));
                parent.recalculateButtonStatus();
                parent.recalculateBracketIdent(parent.conditionsContainer.items);
            }.bind(window, index, parent)
        }];
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionDateRange: function (panel, data, getName) {

        //
        var niceName = t("bundle_ecommerce_pricing_config_condition_daterange");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'DateRange',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:30px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionDateRange"),
            items: [{
                xtype:'datefield',
                fieldLabel: t("from"),
                name: "starting",
                format: 'd.m.Y',
                altFormats: 'U',
                value: data.starting,
                width: 400
            },{
                xtype:'datefield',
                fieldLabel: t("to"),
                name: "ending",
                format: 'd.m.Y',
                altFormats: 'U',
                value: data.ending,
                width: 400
            }],
            listeners: {

            }
        });

        return item;
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionCatalogProduct: function (panel, data, getName) {

        var niceName = t("product");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        if(typeof data == "undefined") {
            data = {};
        }
        var myId = Ext.id();

        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'CatalogProduct',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionCatalogProduct"),
            items: [
                new pimcore.bundle.EcommerceFramework.pricing.config.objects(data.products, {
                    name: "products",
                    title: "",
                    visibleFields: "path",
                    height: 200,
                    width: 500,
                    columns: [],

                    // ?
                    columnType: null,
                    datatype: "data",
                    fieldtype: "objects",

                    // ??
                    index: false,
                    invisible: false,
                    lazyLoading: false,
                    locked: false,
                    mandatory: false,
                    maxItems: "",
                    noteditable: false,
                    permissions: null,
                    phpdocType: "array",
                    queryColumnType: "text",
                    relationType: true,
                    style: "",
                    tooltip: "",
                    visibleGridView: false,
                    visibleSearch: false
                }).getLayoutEdit()
            ]
        });

        return item;
    },


    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionCatalogCategory: function (panel, data, getName) {

        var niceName = t("category");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        if(typeof data == "undefined") {
            data = {};
        }
        var myId = Ext.id();

        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'CatalogCategory',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 0px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionCatalogCategory"),
            items: [
                new pimcore.bundle.EcommerceFramework.pricing.config.objects(data.categories, {
                    name: "categories",
                    title: "",
                    visibleFields: "path",
                    height: 200,
                    width: 500,
                    columns: [],

                    // ?
                    columnType: null,
                    datatype: "data",
                    fieldtype: "objects",

                    // ??
                    index: false,
                    invisible: false,
                    lazyLoading: false,
                    locked: false,
                    mandatory: false,
                    maxItems: "",
                    noteditable: false,
                    permissions: null,
                    phpdocType: "array",
                    queryColumnType: "text",
                    relationType: true,
                    style: "",
                    tooltip: "",
                    visibleGridView: false,
                    visibleSearch: false
                }).getLayoutEdit()
            ]
        });

        return item;
    },


    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionCartAmount: function (panel, data, getName) {

        var niceName = t("bundle_ecommerce_pricing_config_condition_cart_amount");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        if(typeof data == "undefined") {
            data = {};
        }
        var myId = Ext.id();

        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'CartAmount',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionCartAmount"),
            items: [{
                xtype: "numberfield",
                fieldLabel: t("bundle_ecommerce_pricing_config_condition_cart_amount"),
                name: "limit",
                width: 300,
                value: data.limit
            }]
        });

        return item;
    },


    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionToken: function (panel, data, getName) {

        //
        var niceName = t("bundle_ecommerce_pricing_config_condition_token");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'Token',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionToken"),
            items: [{
                xtype: "textfield",
                fieldLabel: t("value"),
                name: "token",
                width: 200,
                value: data.token
            }],
        });

        return item;
    },


    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionSold: function (panel, data, getName) {

        //
        var niceName = t("bundle_ecommerce_pricing_config_condition_sold");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'Sold',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionSold"),
            items: [{
                xtype: "numberfield",
                fieldLabel: t("bundle_ecommerce_pricing_config_condition_sold_count"),
                name: "count",
                width: 300,
                value: data.count
            }],
        });

        return item;
    },


    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionSales: function (panel, data, getName) {

        //
        var niceName = t("bundle_ecommerce_pricing_config_condition_sales");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'Sales',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionSales"),
            items: [{
                xtype: "numberfield",
                fieldLabel: t("amount"),
                name: "amount",
                width: 300,
                value: data.amount
            }],
        });

        return item;
    },


    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionClientIp: function (panel, data, getName) {

        //
        var niceName = 'IP';
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }


        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'ClientIp',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionClientIp"),
            items: [{
                xtype: "textfield",
                fieldLabel: 'IP',
                name: "ip",
                width: 300,
                value: data.ip
            }]
        });


        // set default value
        if(data.ip == undefined)
        {
            Ext.Ajax.request({
                url: Routing.generate('pimcore_admin_settings_getsystem'),
                success: function (response) {

                    var settings = Ext.decode(response.responseText);
                    item.getForm().findField('ip').setValue( settings.config.client_ip );

                }.bind(this)
            });
        }


        return item;
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionVoucherToken: function (panel, data, getName) {
        var niceName = t("bundle_ecommerce_pricing_config_condition_voucherToken");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {
                error_messages: {}
            };
        }


        var langTabs = [];
        Ext.each(pimcore.settings.websiteLanguages, function(lang){
            var tab = {
                title: pimcore.available_languages[ lang ],
                items: [{
                    xtype: "textfield",
                    name: lang,
                    fieldLabel: t("error_message"),
                    width: 600,
                    value: data.error_messages ? data.error_messages[ lang ] : ''
                }]
            };

            langTabs.push( tab );
        });

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'VoucherToken',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionVoucherToken"),
            items: [
                new pimcore.bundle.EcommerceFramework.pricing.config.objects(data.whiteList, {
                    classes: [
                        "OnlineShopVoucherSeries"
                    ],
                    name: "whiteList",
                    title: "White List",
                    visibleFields: "path",
                    height: 200,
                    width: 600,
                    columns: [],
                    columnType: null,
                    datatype: "data",
                    fieldtype: "objects",
                    index: false,
                    invisible: false,
                    lazyLoading: false,
                    locked: false,
                    mandatory: false,
                    maxItems: "",
                    noteditable: false,
                    permissions: null,
                    phpdocType: "array",
                    queryColumnType: "text",
                    relationType: true,
                    style: "",
                    tooltip: "",
                    visibleGridView: false,
                    visibleSearch: false
                }).getLayoutEdit(),
                Ext.create('Ext.form.Panel', {
                    style: "margin-bottom: 10px",
                    cls: "object_localizedfields_panel",
                    name: 'error_messages',
                    isFormPanel: true,
                    items: [{
                        xtype: "tabpanel",
                        style: "margin-bottom: 30px",
                        defaults: {
                            autoHeight: true,
                            bodyStyle: 'padding:10px;'
                        },
                        items: langTabs
                    }]
                })
            ]
        });

        return item;
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionTenant: function (panel, data, getName) {
        var niceName = t("bundle_ecommerce_pricing_config_condition_tenant");
        if (typeof getName !== "undefined" && getName) {
            return niceName;
        }

        // check params
        if (typeof data === "undefined") {
            data = {};
        }

        // create item
        var myId = Ext.id();
        var item = new Ext.form.FormPanel({
            id: myId,
            type: 'Tenant',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionTenant"),
            items: [{
                xtype: "textfield",
                fieldLabel: t("bundle_ecommerce_pricing_config_condition_tenant"),
                name: "tenant",
                width: 350,
                value: data.tenant
            }]
        });

        return item;
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    conditionTargetGroup: function (panel, data, getName) {
        var niceName = t("bundle_ecommerce_pricing_config_condition_targetgroup");
        if (typeof getName !== "undefined" && getName) {
            return niceName;
        }

        // check params
        if (typeof data === "undefined") {
            data = {};
        }


        this.targetGroupStore = Ext.create('Ext.data.JsonStore', {
            autoLoad: true,
            proxy: {
                type: 'ajax',
                url: Routing.generate('pimcore_admin_targeting_targetgrouplist')
            },
            fields: ["id", "text"],
            listeners: {
                load: function() {
                    this.targetGroup.setValue(data.targetGroupId);
                }.bind(this)
            }
        });

        this.targetGroup = new Ext.form.ComboBox({
            displayField:'text',
            valueField: "id",
            name: "targetGroupId",
            fieldLabel: t("bundle_ecommerce_pricing_config_condition_targetgroup"),
            store: this.targetGroupStore,
            editable: false,
            triggerAction: 'all',
            width: 500,
            listeners: {
            }
        });


        // create item
        var myId = Ext.id();
        var item = new Ext.form.FormPanel({
            id: myId,
            type: 'TargetGroup',
            forceLayout: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, "bundle_ecommerce_pricing_icon_conditionTargetGroup"),
            items: [
                this.targetGroup,
                {
                    xtype: "numberfield",
                    fieldLabel: t("bundle_ecommerce_pricing_config_condition_targetgroup_threshold"),
                    name: "threshold",
                    width: 200,
                    value: data.threshold
                }
            ]
        });

        return item;
    }
};


/**
 * ACTION TYPES
 */
pimcore.registerNS("pimcore.bundle.EcommerceFramework.pricing.actions");
pimcore.bundle.EcommerceFramework.pricing.actions = {

    /**
     * @param name
     * @param index
     * @param parent
     * @param data
     * @param iconCls
     * @returns {Array}
     */
    getTopBar: function (name, index, parent, data, iconCls) {
        return [
            {
                iconCls: iconCls,
                disabled: true
            },
            {
                xtype: "tbtext",
                text: "<b>" + name + "</b>"
            },
            "->",
            {
                iconCls: "pimcore_icon_delete",
                handler: function (index, parent) {
                    parent.actionsContainer.remove(Ext.getCmp(index));
                }.bind(window, index, parent)
        }];
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    actionGift: function (panel, data, getName) {

        // getName macro
        var niceName = t("bundle_ecommerce_pricing_config_action_gift");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // config
        var iconCls = 'bundle_ecommerce_pricing_icon_actionGift';

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'Gift',
            forceLayout: true,
            border: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, iconCls),
            items: [
                {
                    xtype: "textfield",
                    fieldLabel: t("product"),
                    name: "product",
                    width: 500,
                    cls: "input_drop_target",
                    value: data.product,
                    listeners: {
                        "render": function (el) {
                            new Ext.dd.DropZone(el.getEl(), {
                                reference: this,
                                ddGroup: "element",
                                getTargetFromEvent: function(e) {
                                    return this.getEl();
                                }.bind(el),

                                onNodeOver : function(target, dd, e, data) {
                                    return Ext.dd.DropZone.prototype.dropAllowed;
                                },

                                onNodeDrop : function (target, dd, e, data) {
                                    var record = data.records[0];
                                    var data = record.data;

                                    if (data.type == "object" || data.type == "variant") {
                                        this.setValue(data.path);
                                        return true;
                                    }
                                    return false;
                                }.bind(el)
                            });
                        }
                    }
                }
            ]
        });

        return item;
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    actionCartDiscount: function (panel, data, getName) {

        // getName macro
        var niceName = t("bundle_ecommerce_pricing_config_action_cart_discount");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // config
        var iconCls = 'bundle_ecommerce_pricing_icon_actionCartDiscount';

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'CartDiscount',
            forceLayout: true,
            border: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, iconCls),
            items: [
                {
                    xtype: "numberfield",
                    fieldLabel: t("bundle_ecommerce_pricing_config_action_cart_discount_amount"),
                    name: "amount",
                    width: 200,
                    value: data.amount,
                    minValue: 0
                }, {
                    xtype: "numberfield",
                    fieldLabel: t("bundle_ecommerce_pricing_config_action_cart_discount_percent"),
                    name: "percent",
                    width: 200,
                    value: data.percent,
                    maxValue: 100,
                    minValue: 0
                }
            ]
        });

        return item;
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    actionProductDiscount: function (panel, data, getName) {

        // getName macro
        var niceName = t("bundle_ecommerce_pricing_config_action_product_discount");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // config
        var iconCls = 'bundle_ecommerce_pricing_icon_actionProductDiscount';

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'ProductDiscount',
            forceLayout: true,
            border: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, iconCls),
            items: [
                {
                    xtype: "numberfield",
                    fieldLabel: t("bundle_ecommerce_pricing_config_action_product_discount_amount"),
                    name: "amount",
                    width: 200,
                    value: data.amount,
                    minValue: 0
                }, {
                    xtype: "numberfield",
                    fieldLabel: t("bundle_ecommerce_pricing_config_action_product_discount_percent"),
                    name: "percent",
                    width: 200,
                    value: data.percent,
                    maxValue: 100,
                    minValue: 0
                }
            ]
        });

        return item;
    },

    /**
     * @param panel
     * @param data
     * @param getName
     * @returns Ext.form.FormPanel
     */
    actionFreeShipping: function (panel, data, getName) {

        // getName macro
        var niceName = t("bundle_ecommerce_pricing_config_action_free_shipping");
        if(typeof getName != "undefined" && getName) {
            return niceName;
        }

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // config
        var iconCls = 'bundle_ecommerce_pricing_icon_actionFreeShipping';

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            id: myId,
            type: 'FreeShipping',
            forceLayout: true,
            border: true,
            style: "margin: 10px 0 0 0",
//            bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
            tbar: this.getTopBar(niceName, myId, panel, data, iconCls)
        });

        return item;
    }
};



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.EcommerceFramework.pricing.config.objects");
pimcore.bundle.EcommerceFramework.pricing.config.objects = Class.create(pimcore.object.tags.manyToManyObjectRelation, {

    type: "objects",
    dataChanged: false,

    initialize: function (data, fieldConfig) {
        this.data = [];
        this.fieldConfig = fieldConfig;

        if (data) {
            this.data = data;
        }

        var fields = [];
        var visibleFields = this.fieldConfig.visibleFields.split(",");

        fields.push("id");

        var i;

        for(i = 0; i < visibleFields.length; i++) {
            fields.push(visibleFields[i]);
        }

        this.store = new Ext.data.ArrayStore({
            data: this.data,
            listeners: {
                add:function() {
                    this.dataChanged = true;
                }.bind(this),
                remove: function() {
                    this.dataChanged = true;
                }.bind(this),
                clear: function () {
                    this.dataChanged = true;
                }.bind(this),
                update: function(store) {
                    this.dataChanged = true;
                }.bind(this)
            },
            fields: fields
        });
    },


    createLayout: function(readOnly) {
        var autoHeight = false;
        if (intval(this.fieldConfig.height) < 15) {
            autoHeight = true;
        }

        var cls = 'object_field';
        var i;

        var visibleFields = this.fieldConfig.visibleFields.split(",");

        var columns = [];
        columns.push({header: 'ID', dataIndex: 'id', width: 50});

        for (i = 0; i < visibleFields.length; i++) {
            columns.push({header: t(visibleFields[i]), dataIndex: visibleFields[i], width: 100, editor: null,
                                                                    renderer: renderer});
        }

        for (i = 0; i < this.fieldConfig.columns.length; i++) {
            var width = 100;
            if(this.fieldConfig.columns[i].width) {
                width = this.fieldConfig.columns[i].width;
            }

            var editor = null;
            var renderer = null;
            var listeners = null;

            if(this.fieldConfig.columns[i].type == "number" && !readOnly) {
                editor = new Ext.form.NumberField({});

            } else if(this.fieldConfig.columns[i].type == "text" && !readOnly) {
                editor = new Ext.form.TextField({});
            } else if(this.fieldConfig.columns[i].type == "select" && !readOnly) {
                var selectDataRaw = this.fieldConfig.columns[i].value.split(";");
                var selectData = [];
                for(var j = 0; j < selectDataRaw.length; j++) {
                    selectData.push([selectDataRaw[j], selectDataRaw[j]]);
                }

                editor = new Ext.form.ComboBox({
                    typeAhead: true,
                    forceSelection: true,
                    triggerAction: 'all',
                    lazyRender:true,
                    mode: 'local',

                    store: new Ext.data.ArrayStore({
                        fields: [
                            'value',
                            'label'
                        ],
                        data: selectData
                    }),
                    valueField: 'value',
                    displayField: 'label'
                });
            } else if(this.fieldConfig.columns[i].type == "bool") {
                if(!readOnly) {
                    columns.push(new Ext.grid.CheckColumn({
                        header: t(this.fieldConfig.columns[i].label),
                        dataIndex: this.fieldConfig.columns[i].key,
                        width: width
                    }));
                    continue;
                }
                renderer = function (value, metaData, record, rowIndex, colIndex, store) {
                    metaData.css += ' x-grid3-check-col-td';
                    if(!value || value == "0") {
                        value = false;
                    }
                    return String.format('<div class="x-grid3-check-col{0}"'
                        + 'style="background-position:10px center;">&#160;</div>', value ? '-on' : '');
                };

            }

            columns.push({
                header: t(this.fieldConfig.columns[i].label),
                dataIndex: this.fieldConfig.columns[i].key,
                editor: editor,
                renderer: renderer,
                listeners: listeners,
                sortable: true,
                width: width
            });
        }

        columns.push({
            xtype: 'actioncolumn',
            menuText: t('open'),
            width: 40,
            items: [
                {
                    tooltip: t('open'),
                    icon: "/bundles/pimcoreadmin/img/flat-color-icons/open_file.svg",
                    handler: function (grid, rowIndex) {
                        var data = grid.getStore().getAt(rowIndex);
                        pimcore.helpers.openObject(data.data.id, "object");
                    }.bind(this)
                }
            ]
        });

        if(!readOnly) {
            columns.push({
                xtype: 'actioncolumn',
                menuText: t('remove'),
                width: 40,
                items: [
                    {
                        tooltip: t('remove'),
                        icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                        handler: function (grid, rowIndex) {
                            grid.getStore().removeAt(rowIndex);
                        }.bind(this)
                    }
                ]
            });
        }


        this.component = new Ext.grid.GridPanel({
            store: this.store,
            selModel: Ext.create('Ext.selection.RowModel', {}),
            minHeight: 150,
            border: true,
            viewConfig: {
                forceFit: true
            },
            columns: [
                {dataIndex: 'id', header: 'ID', flex: 50},
                {dataIndex: "path", header: t("path"), flex: 200},
                {
                    xtype: 'actioncolumn',
                    menuText: t('open'),
                    width: 40,
                    items: [
                        {
                            tooltip: t('open'),
                            icon: "/bundles/pimcoreadmin/img/flat-color-icons/open_file.svg",
                            handler: function (grid, rowIndex) {
                                var data = grid.getStore().getAt(rowIndex);
                                pimcore.helpers.openObject(data.data.id, "object");
                            }.bind(this)
                        }
                    ]
                },
                {
                    xtype: 'actioncolumn',
                    menuText: t('remove'),
                    width: 40,
                    items: [
                        {
                            tooltip: t('remove'),
                            icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                            handler: function (grid, rowIndex) {
                                grid.getStore().removeAt(rowIndex);
                            }.bind(this)
                        }
                    ]
                }
            ]
            ,
            cls: cls,
            width: this.fieldConfig.width,
            height: this.fieldConfig.height,
            style: this.fieldConfig.style,
            tbar: {
                items: [
                    {
                        xtype: "tbspacer",
                        width: 20,
                        height: 16,
                        cls: "pimcore_icon_droptarget"
                    },
                    {
                        xtype: "tbtext",
                        text: "<b>" + this.fieldConfig.title + "</b>"
                    },
                    "->",
                    {
                        xtype: "button",
                        iconCls: "pimcore_icon_search",
                        handler: this.openSearchEditor.bind(this)
                    },
                    {
                        xtype: "button",
                        iconCls: "pimcore_icon_delete",
                        handler: this.empty.bind(this)
                    }
                ],
                ctCls: "pimcore_force_auto_width",
                cls: "pimcore_force_auto_width"
            },
            autoHeight: autoHeight,
            bodyCssClass: "pimcore_object_tag_objects"
        });

        this.component.on("rowcontextmenu", this.onRowContextmenu);
        this.component.reference = this;

        if(!readOnly) {
            this.component.on("afterrender", function () {

                var dropTargetEl = this.component.getEl();
                var gridDropTarget = new Ext.dd.DropZone(dropTargetEl, {
                    ddGroup    : 'element',
                    getTargetFromEvent: function(e) {
                        return this.component.getEl().dom;
                        //return e.getTarget(this.grid.getView().rowSelector);
                    }.bind(this),
                    onNodeOver: function (overHtmlNode, ddSource, e, data) {
                        var record = data.records[0];
                        var data = record.data;
                        var fromTree = this.isFromTree(ddSource);

                        if (data.elementType == "object" && this.dndAllowed(data, fromTree)) {
                            return Ext.dd.DropZone.prototype.dropAllowed;
                        } else {
                            return Ext.dd.DropZone.prototype.dropNotAllowed;
                        }

                    }.bind(this),
                    onNodeDrop : function(target, ddSource, e, data) {
                        var record = data.records[0];
                        var data = record.data;
                        var fromTree = this.isFromTree(ddSource);

                        // check if data is a treenode, if not allow drop because of the reordering
                        if (!fromTree) {
                            return true;
                        }

                        if (data.elementType != "object") {
                            return false;
                        }

                        if (this.dndAllowed(data, fromTree)) {
                            var initData = {
                                id: data.id,
                                path: data.path,
                                type: data.className
                            };

                            if (!this.objectAlreadyExists(initData.id)) {
                                this.store.add(initData);
                                return true;
                            }
                        }
                        return false;
                    }.bind(this)
                });
            }.bind(this));
        }


        return this.component;
    },


    getLayoutEdit: function () {
        return this.createLayout(false);
    },

    getLayoutShow: function () {
        return this.createLayout(true);
    },


    openSearchEditor: function () {
        var allowedClasses;
        if (this.fieldConfig.classes != null && this.fieldConfig.classes.length > 0) {
            allowedClasses = [];
            for (var i = 0; i < this.fieldConfig.classes.length; i++) {
                allowedClasses.push(this.fieldConfig.classes[i]);
            }
        }

        pimcore.helpers.itemselector(true, this.addDataFromSelector.bind(this), {
            type: ["object"],
            subtype: {
                object: ["object", "folder","variant"]
            },
            specific: {
                classes: allowedClasses
            }
        });
    },

    addDataFromSelector: function (items) {

        if (items.length > 0) {

            var toBeRequested = new Ext.util.Collection();

            for (var i = 0; i < items.length; i++) {
                if (!this.objectAlreadyExists(items[i].id)) {
                    toBeRequested.add(this.store.add({
                        id: items[i].id,
                        path: items[i].fullpath,
                        type: items[i].classname
                    }));
                }
            }
        }
    }
    ,


    dndAllowed: function(data, fromTree) {

        // check if data is a treenode, if not allow drop because of the reordering
        if (!fromTree) {
            return true;
        }

        // only allow objects not folders
        if (data.type == "folder") {
            return false;
        }

        //check if allowed classes config is set and if it applies
        if(this.fieldConfig.classes) {
            return (this.fieldConfig.classes.indexOf(data.className) > -1);
        }

        // allow all objects (temporary)
        return true;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.EcommerceFramework.VoucherSeriesTab");

pimcore.bundle.EcommerceFramework.VoucherSeriesTab = Class.create({

    title: t('bundle_ecommerce_vouchertoolkit_tab'),
    iconCls: 'plugin_voucherservice_icon',
    src: null,
    id: null,

    initialize: function(object, type) {
        this.object = object;
        this.id = object.id;
        this.src = this.src + "?id=" + this.id;
        this.type = type;
        this.src = Routing.generate('pimcore_ecommerce_backend_voucher_voucher-code-tab', {id: this.id});
    },

    getLayout: function () {
        if (this.panel == null) {

            this.reloadButton = new Ext.Button({
                text: t("reload"),
                iconCls: "pimcore_icon_reload",
                handler: this.reload.bind(this)
            });


            this.panel = new Ext.Panel({
                id: "bundle_ecommerce_vouchertoolkit_tab_" + this.id,
                title: this.title,
                iconCls: this.iconCls,
                border: false,
                layout: "fit",
                closable: false,
                bodyStyle: "-webkit-overflow-scrolling:touch;",
                html: '<iframe src="about:blank" frameborder="0" width="100%" id="bundle_ecommerce_vouchertoolkit_tab_frame_' + this.id + '"></iframe>',
                tbar: [this.reloadButton]
            });

            this.panel.on("resize", this.onLayoutResize.bind(this));
            var that = this;
            this.panel.on("afterrender", function(e){
                that.panel.on("activate", function(e){
                    that.reload();
                });
            });

        }
        return this.panel;

    },

    onLayoutResize: function (el, width, height, rWidth, rHeight) {
        this.setLayoutFrameDimensions(width, height);
    },

    setLayoutFrameDimensions: function (width, height) {
        Ext.get("bundle_ecommerce_vouchertoolkit_tab_frame_" + this.id).setStyle({
            height: (height - 50) + "px"
        });
    },

    reload: function () {
        try {
            Ext.get("bundle_ecommerce_vouchertoolkit_tab_frame_" + this.id).dom.src = this.src;
        }
        catch (e) {
            console.log(e);
        }
    }

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.EcommerceFramework.OrderTab");

pimcore.bundle.EcommerceFramework.OrderTab = Class.create({

    title: t('bundle_ecommerce_order_tab'),
    iconCls: 'pimcore_icon_portlet_feed',
    src: null,
    id: null,

    initialize: function(object, type) {
        this.object = object;
        this.id = object.id;
        this.type = type;
        this.src = Routing.generate('pimcore_ecommerce_backend_admin-order_detail', {id: this.id});
    },

    getLayout: function () {
        if (this.panel == null) {

            this.reloadButton = new Ext.Button({
                text: t("reload"),
                iconCls: "pimcore_icon_reload",
                handler: this.reload.bind(this)
            });

            this.openButton = new Ext.Button({
                text: t("open"),
                iconCls: "pimcore_icon_open",
                handler: function () {
                    window.open(Ext.get("bundle_ecommerce_order_tab_frame_" + this.id).dom.getAttribute("src"));
                }.bind(this)
            });




            this.panel = new Ext.Panel({
                id: "bundle_ecommerce_order_tab_" + this.id,
                title: this.title,
                iconCls: this.iconCls,
                border: false,
                layout: "fit",
                closable: false,
                bodyStyle: "-webkit-overflow-scrolling:touch;",
                html: '<iframe src="about:blank" frameborder="0" width="100%" id="bundle_ecommerce_order_tab_frame_' + this.id + '"></iframe>',
                tbar: [this.reloadButton, this.openButton]
            });

            this.panel.on("resize", this.onLayoutResize.bind(this));
            var that = this;
            this.panel.on("afterrender", function(e){
                that.panel.on("activate", function(e){
                    that.reload();
                });
            });

        }
        return this.panel;

    },

    onLayoutResize: function (el, width, height, rWidth, rHeight) {
        this.setLayoutFrameDimensions(width, height);
    },

    setLayoutFrameDimensions: function (width, height) {
        Ext.get("bundle_ecommerce_order_tab_frame_" + this.id).setStyle({
            height: (height - 50) + "px"
        });
    },

    reload: function () {
        try {
            Ext.get("bundle_ecommerce_order_tab_frame_" + this.id).dom.src = this.src;
        }
        catch (e) {
            console.log(e);
        }
    }

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.customermanagementframework");

pimcore.plugin.customermanagementframework = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.customermanagementframework";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);

        this.navEl = Ext.get('pimcore_menu_search').insertSibling('<li id="pimcore_menu_cmf" data-menu-tooltip="'
            + t('plugin_cmf_mainmenu') +
            '" class="pimcore_menu_item pimcore_menu_needs_children"><img src="/bundles/pimcorecustomermanagementframework/icons/outline-group-24px.svg"></li>', 'before');
        this.menu = new Ext.menu.Menu({cls: 'pimcore_navigation_flyout'});

        pimcore.layout.toolbar.prototype.cmfMenu = this.menu;
    },

    pimcoreReady: function (params, broker) {
        this.initToolbar();
        this.initNewsletterQueueInfo();
    },

    initToolbar: function () {
        var toolbar = pimcore.globalmanager.get('layout_toolbar');
        var user = pimcore.globalmanager.get('user');

        // customer view
        if (user.isAllowed('plugin_cmf_perm_customerview')) {
            var customerViewPanelId = 'plugin_cmf_customerview';

            var menuOptions = pimcore.settings.cmf.shortcutFilterDefinitions.length ? {
                cls: "pimcore_navigation_flyout",
                shadow: false,
                items: []
            } : null;

            var customerMenu = Ext.create('Ext.menu.Item', {
                text: t('plugin_cmf_customerview'),
                iconCls: 'pimcore_nav_icon_customers',
                hideOnClick: false,
                menu: menuOptions,
                handler: function () {
                    try {
                        pimcore.globalmanager.get(customerViewPanelId).activate();
                    }
                    catch (e) {
                        pimcore.globalmanager.add(
                            customerViewPanelId,
                            new pimcore.tool.genericiframewindow(
                                customerViewPanelId,
                                '/admin/customermanagementframework/customers/list',
                                'pimcore_icon_customers',
                                t('plugin_cmf_customerview')
                            )
                        );
                    }
                }
            });

            // add to menu
            this.menu.add(customerMenu);

            pimcore.settings.cmf.shortcutFilterDefinitions.forEach(function (definition) {
                var filterId = definition.id;
                var filterKey = 'plugin_cmf_customerview_filter_' + definition.id;
                var filterName = definition.name;
                var filterItem = {
                    text: filterName,
                    iconCls: 'pimcore_nav_icon_customers',
                    handler: function () {
                        try {
                            pimcore.globalmanager.get(filterKey).activate();
                        }
                        catch (e) {
                            pimcore.globalmanager.add(
                                filterKey,
                                new pimcore.tool.genericiframewindow(
                                    filterKey,
                                    '/admin/customermanagementframework/customers/list?filterDefinition[id]=' + filterId,
                                    'pimcore_icon_customers',
                                    filterName
                                )
                            );
                        }
                    }
                };
                customerMenu.getMenu().add(filterItem);
            });
        }

        // customer duplicates view
        if (pimcore.settings.cmf.duplicatesViewEnabled && user.isAllowed('plugin_cmf_perm_customerview')) {
            var customerDuplicateViewPanelId = 'plugin_cmf_customerduplicatesview';
            var item = {
                text: t('plugin_cmf_customerduplicatesview'),
                iconCls: 'pimcore_nav_icon_customerduplicates ',
                handler: function () {
                    try {
                        pimcore.globalmanager.get(customerDuplicateViewPanelId).activate();
                    }
                    catch (e) {
                        pimcore.globalmanager.add(
                            customerDuplicateViewPanelId,
                            new pimcore.tool.genericiframewindow(
                                customerDuplicateViewPanelId,
                                '/admin/customermanagementframework/duplicates/list',
                                'pimcore_icon_customerduplicates',
                                t('plugin_cmf_customerduplicatesview')
                            )
                        );
                    }
                }
            };

            // add to menu
            this.menu.add(item);
        }

        if (user.isAllowed('plugin_cmf_perm_customer_automation_rules')) {
            var customerAutomationRulesPanelId = 'plugin_cmf_customerautomationrules';
            var item = {
                text: t('plugin_cmf_customerautomationrules'),
                iconCls: 'pimcore_nav_icon_customerautomationrules ',
                handler: function () {
                    try {
                        pimcore.globalmanager.get(customerAutomationRulesPanelId).activate();
                    }
                    catch (e) {
                        pimcore.globalmanager.add(customerAutomationRulesPanelId, new pimcore.plugin.cmf.config.panel(customerAutomationRulesPanelId));
                    }
                }
            };

            this.menu.add(item);
        }

        if (pimcore.settings.cmf.newsletterSyncEnabled && user.isAllowed('plugin_cmf_perm_newsletter_enqueue_all_customers')) {
            var item = {
                text: t('plugin_cmf_newsletter_enqueue_all_customers'),
                iconCls: 'pimcore_nav_icon_newsletter_enqueue_all_customers',
                handler: function () {
                    Ext.Ajax.request({
                        url: "/__customermanagementframework/webservice/newsletter/enqueue-all-customers",
                        success: function () {
                            setTimeout(function () {
                                this.checkNewsletterQueueStatus(Ext.get('pimcore_bundle_customerManagementFramework_newsletter_queue_status'));
                            }.bind(this), 3000)
                        }.bind(this)
                    });
                }.bind(this)
            };

            this.menu.add(item);
        }

        if(user.admin) {
            const webserviceConfigurationView = 'plugin_cmf_webserviceConfigurationView';
            var item = {
                text: t('plugin_cmf_webserviceConfigurationView'),
                iconCls: 'pimcore_nav_icon_webservice_settings ',
                handler: function () {
                    try {
                        pimcore.globalmanager.get(webserviceConfigurationView).activate();
                    }
                    catch (e) {
                        pimcore.globalmanager.add(webserviceConfigurationView, new pimcore.plugin.customermanagementframework.webserviceConfigurationView(webserviceConfigurationView));
                    }
                }
            };

            this.menu.add(item);
        }

        // remove main menu
        if (this.menu.items.length === 0) {
            Ext.get('pimcore_menu_cmf').remove();
            return;
        }

        this.navEl.on('mousedown', toolbar.showSubMenu.bind(toolbar.cmfMenu));
        pimcore.plugin.broker.fireEvent("cmfMenuReady", toolbar.cmfMenu);
    },

    postOpenObject: function (object, type) {
        if ("object" === type && object.data.general.o_className === pimcore.settings.cmf.customerClassName && pimcore.globalmanager.get("user").isAllowed(ActivityView.config.PERMISSION)) {
            var panel = new ActivityView.ActivityTab(object, type).getPanel();

            object.tab.items.items[1].insert(1, panel);
            panel.updateLayout();
        }

        this.addSegmentAssignmentTab(object, 'object', type);
    },

    startCustomerImport: function(customerSegmentId) {
        var importid = uniqid();

        pimcore.helpers.uploadDialog('/admin/object-helper/import-upload?importId=' + importid, "Filedata", function (res) {


            var dialog = new pimcore.object.helpers.import.configDialog({
                classId: pimcore.settings.cmf.customerClassId,                   // instructs the importer not to ask for the file
                importConfigId: pimcore.settings.cmf.customerImporterId,         // the saved configuration id
                parentId: pimcore.settings.cmf.customerImportParentId,           // the tree parent id (optional)
                uniqueImportId: importid,             // the unique id of this import (IMPORTANT: CSV is expected to be available at ' PIMCORE_SYSTEM_TEMP_DIRECTORY + '/import_' + [uniqueImportId])
                mode: "direct",
                additionalData: {                   // optional data passed to the event handler
                    customerSegmentId: customerSegmentId
                }
            });
        }.bind(this), function () {
            Ext.MessageBox.alert(t("error"), t("error"));
        });
    },

    pluginObjectMergerPostMerge: function (data) {
        var frame = document.getElementById("pimcore_iframe_frame_plugin_cmf_customerduplicatesview");
        if (frame) {
            var $ = frame.contentWindow.$;

            $('#customerduplicates_' + data.sourceId + '_' + data.targetId).remove();
            $('#customerduplicates_' + data.targetId + '_' + data.sourceId).remove();

            if (!$('.js-duplicates-item').length) {
                frame.contentWindow.location.reload();
            }
        }
    },

    checkNewsletterQueueStatus: function (statusIcon, initTimeout) {
        Ext.Ajax.request({
            url: "/__customermanagementframework/webservice/newsletter/get-queue-size",
            method: "get",
            success: function (response) {
                var rdata = Ext.decode(response.responseText);

                document.getElementById('pimcore_bundle_customerManagementFramework_newsletter_queue_status_count').innerHTML = rdata.size;

                if (rdata.size > 0) {
                    statusIcon.show();
                } else {
                    statusIcon.hide();
                }


                if (initTimeout !== false) {
                    setTimeout(this.checkNewsletterQueueStatus.bind(this, statusIcon), 15000);
                }


            }.bind(this)
        });
    },

    initNewsletterQueueInfo: function () {

        if (!pimcore.settings.cmf.newsletterSyncEnabled) {
            return;
        }

        //adding status icon
        var statusBar = Ext.get("pimcore_status");

        var statusIcon = Ext.get(statusBar.insertHtml('afterBegin',
            '<div id="pimcore_bundle_customerManagementFramework_newsletter_queue_status" style="display:none;" data-menu-tooltip="'
            + t("plugin_cmf_newsletter_queue_running_tooltip") + '"><span id="pimcore_bundle_customerManagementFramework_newsletter_queue_status_count"></span></div>'));

        pimcore.helpers.initMenuTooltips();

        this.checkNewsletterQueueStatus(statusIcon);
    },
    postOpenDocument: function (document, type) {

        if (pimcore.settings.cmf.newsletterSyncEnabled && type === 'email') {
            document.tab.items.items[0].add({
                text: t('plugin_cmf_newsletter_export_template'),
                iconCls: 'plugin_cmf_icon_export_action',
                scale: 'small',
                handler: function (obj) {

                    Ext.Ajax.request({
                        url: "/admin/customermanagementframework/templates/export",
                        method: "post",
                        params: {document_id: document.id},
                        success: function (response) {

                            var rdata = Ext.decode(response.responseText);
                            if (rdata && rdata.success) {
                                pimcore.helpers.showNotification(t("success"), t("plugin_cmf_newsletter_export_template_success"), "success");
                            } else {
                                pimcore.helpers.showNotification(t("error"), t("plugin_cmf_newsletter_export_template_error"), "error", response.responseText);
                            }

                        }.bind(this)
                    });

                }.bind(this, document)
            });
            pimcore.layout.refresh();


        }

        this.addSegmentAssignmentTab(document, 'document', type);
    },

    postOpenAsset: function (asset, type) {
        this.addSegmentAssignmentTab(asset, 'asset', type);
    },

    addSegmentAssignmentTab: function (element, type, subType) {
        var addTab = Boolean(pimcore.settings.cmf.segmentAssignment[type][subType]);

        if('object' === type && 'folder' !== subType) {
            addTab &= pimcore.settings.cmf.segmentAssignment[type][subType][element.data.general.o_className];
        }

        if (!addTab) {
            return;
        }

        this.segmentTab = new pimcore.plugin.customermanagementframework.segmentAssignmentTab(element, type);
        var tabPanel = element.tab.items.items[1];
        tabPanel.insert(tabPanel.items.length, this.segmentTab.getLayout());
        tabPanel.updateLayout();
    }
});

var customermanagementframeworkPlugin = new pimcore.plugin.customermanagementframework();




/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


var ActivityView = pimcore.registerNS("pimcore.plugin.customermanagementframework.ActivityView");

ActivityView.config = {
    PERMISSION: "plugin_cmf_perm_activityview"
};

ActivityView.ActivityTab = Class.create({

    initialize: function (object, type) {
        this.config = {
            id: "cmf-activity-view-" + object.id,
            object: object,
            type: type
        };

        this._panel = null;
    },

    getPanel: function () {
        if (this._panel) return this._panel;

        this._panel = Ext.create("Ext.panel.Panel", {
            title: "Activities",
            iconCls: "pimcore_icon_activities",
            border: false,
            layout: "fit",
            scrollable: true,
            html: '<iframe src="about:blank" frameborder="0" style="width: 100%" id="' + this.config.id + '"></iframe>',
            tbar: {
                xtype: "toolbar",
                cls: "main-toolbar",
                items: [{
                    text: t("reload"),
                    iconCls: "pimcore_icon_reload",
                    handler: this.reload.bind(this)
                }]
            }
        });

        this._panel.on("resize", this.onResize.bind(this));
        this._panel.on("render", this.onRender.bind(this));
        this._panel.on("afterrender", this.reload.bind(this));

        return this._panel;
    },

    onRender: function () {
        this._iframe = Ext.get(this.config.id);
    },

    onResize: function (el, width, height) {
        if (!this._iframe) return;

        this._iframe.setStyle({
            height: (height - 55) + "px"
        });
    },

    reload: function () {
        if (!this._iframe) return;

        //var url = TranslationToolkit.config.Tab.URL;
        var url = "/admin/customermanagementframework/activities/list?customerId=" + this.config.object.id;

        this._iframe.dom.src = url;
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


var CustomerView = pimcore.registerNS("pimcore.plugin.customermanagementframework.CustomerView");

CustomerView.config = {
    PERMISSION: "plugin_cmf_perm_customerview"
};

CustomerView.CustomerTab = Class.create({

    initialize: function (object, type) {
        this.config = {
            id: "cmf-customer-view-" + object.id,
            object: object,
            type: type
        };

        this._panel = null;
    },

    getPanel: function () {
        if (this._panel) return this._panel;

        this._panel = Ext.create("Ext.panel.Panel", {
            title: "Customers",
            iconCls: "pimcore_icon_customers",
            border: false,
            layout: "fit",
            scrollable: true,
            html: '<iframe src="about:blank" frameborder="0" style="width: 100%" id="' + this.config.id + '"></iframe>',
            tbar: {
                xtype: "toolbar",
                cls: "main-toolbar",
                items: [{
                    text: t("reload"),
                    iconCls: "pimcore_icon_reload",
                    handler: this.reload.bind(this)
                }]
            }
        });

        this._panel.on("resize", this.onResize.bind(this));
        this._panel.on("render", this.onRender.bind(this));
        this._panel.on("afterrender", this.reload.bind(this));

        return this._panel;
    },

    onRender: function () {
        this._iframe = Ext.get(this.config.id);
    },

    onResize: function (el, width, height) {
        if (!this._iframe) return;

        this._iframe.setStyle({
            height: (height - 55) + "px"
        });
    },

    reload: function () {
        if (!this._iframe) return;

        //var url = TranslationToolkit.config.Tab.URL;
        var url = "/admin/customermanagementframework/customers/list?segmentId=" + this.config.object.id;

        this._iframe.dom.src = url;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.customermanagementframework.segmentAssignmentTab");

pimcore.plugin.customermanagementframework.segmentAssignmentTab = Class.create({
    initialize: function (object, type) {
        this.object = object;
        this.type = type;
    },

    getLayout: function () {
        if ("undefined" !== typeof this.layout) {
            return this.layout;
        }


        var inheritancePanel = new Ext.create('Ext.form.FieldSet', {
            title: t('cmf_segmentAssignment_inheritanceSettings'),
            items: [
                this.getInheritablePanel(), this.getCheckBox()
            ]
        });

        var assignmentPanel = new Ext.create('Ext.form.FieldSet', {
            title: t('cmf_segmentAssignment_assignment'),
            items: [
                this.getAssignedPanel()
            ]
        });

        return this.layout = new Ext.Panel({
            tooltip: t('segmentAssignment'),
            border: false,
            iconCls: "plugin_cmf_icon_actiontriggerrule_ExecuteSegmentBuilders_tab pimcore_material_icon",
            bodyStyle:'padding: 0 10px;',
            cls: "pimcore_object_panel_edit",
            tbar: [],
            items: [inheritancePanel, assignmentPanel]
        });
    },

    getInheritablePanel: function () {
        this.inheritableStore = new Ext.data.Store({
            autoDestroy: true,
            autoLoad: true,
            proxy: {
                type: 'ajax',
                url: '/admin/customermanagementframework/segment-assignment/inheritable-segments?id=' + this.object.id + '&type=' + this.type,
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            },
            fields: ['id', 'name', 'type']
        });

        this.inheritableGrid = Ext.create('Ext.grid.Panel', {
            minHeight: 80,
            border: true,
            tbar: {
                items: [
                    {
                        xtype: "tbtext",
                        text: "<b>" + t('cmf_segmentAssignment_inheritableAssignments') + "</b>"
                    }
                ],
                ctCls: "pimcore_force_auto_width",
                cls: "pimcore_force_auto_width",
                minHeight: 36
            },
            bodyCssClass: "pimcore_object_tag_objects",
            store: this.inheritableStore,
            columns: [
                {header: 'Id', sortable: false, dataIndex: 'id', flex: 1},
                {header: 'Name', sortable: false, dataIndex: 'name', flex: 4}
            ],
            stripeRows: true,
            disabledCls: 'x-hidden-display'
        });

        this.inheritableGrid.on("rowclick", function (grid, record, tr, rowIndex, e, eOpts) {
            var data = grid.getStore().getAt(rowIndex);

            pimcore.helpers.openObject(data.data.id, data.data.type);
        });


        return this.inheritableGrid;
    },

    getCheckBox: function () {
        var inheritableGrid = this.inheritableGrid;

        var updateBreaksInheritance = true;

        this.breaksInheritance = Ext.create('Ext.form.FormPanel', {
            items: [
                {
                    xtype: 'checkbox',
                    boxLabel: t('cmf_segmentAssignment_breakInheritance'),
                    inputValue: '1',
                    style: "padding-top: 10px",
                    checked: false,
                    handler: function (target, checkedState) {
                        inheritableGrid.setDisabled(checkedState);
                        inheritableGrid.updateLayout();
                        if(updateBreaksInheritance) {
                            this.saveSegmentAssignments().bind(this);
                        }
                    }.bind(this)
                }
            ]
        });

        var checkBox = this.breaksInheritance.items.items[0];

        Ext.Ajax.request({
            url: "/admin/customermanagementframework/segment-assignment/breaks-inheritance",
            method: "post",
            params: {id: this.object.id, type: this.type},
            success: function (response) {
                var data = JSON.parse(response.responseText);
                updateBreaksInheritance = false;
                checkBox.setValue(data.breaksInheritance === '1');
                updateBreaksInheritance = true;
            },
            failure: function (response) {
                pimcore.helpers.showNotification(t("error"), t("cmf_segmentAssignment_segment_assignment_error"), "error", response.responseText);
            }
        });

        return this.breaksInheritance;
    },

    getAssignedPanel: function () {
        this.assignedStore = new Ext.data.Store({
            autoDestroy: true,
            proxy: {
                type: 'ajax',
                url: '/admin/customermanagementframework/segment-assignment/assigned-segments?id=' + this.object.id + '&type=' + this.type,
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            },
            listeners: {
                add: this.saveSegmentAssignments.bind(this),
                remove: this.saveSegmentAssignments.bind(this),
                clear: this.saveSegmentAssignments.bind(this)
            },
            fields: ['id', 'name', 'type']
        });

        this.assignedStore.load();

        var assignedGrid = Ext.create('Ext.grid.Panel', {
            minHeight: 90,
            border: true,
            cls: 'object_field',
            tbar: {
                items: [
                    Ext.create('Ext.toolbar.Spacer', {
                        width: 20,
                        height: 16,
                        cls: "pimcore_icon_droptarget"
                    }),
                    {
                        xtype: "tbtext",
                        text: "<b>" + t('cmf_segmentAssignment_assignedSegments') + "</b>"
                    },
                    "->",
                    {
                        xtype: "button",
                        iconCls: "pimcore_icon_search",
                        handler: this.openSearchEditor.bind(this)
                    }
                ],
                ctCls: "pimcore_force_auto_width",
                cls: "pimcore_force_auto_width"
            },
            bodyCssClass: "pimcore_object_tag_objects",
            store: this.assignedStore,

            columns: [
                {header: 'Id', sortable: false, dataIndex: 'id', flex: 1},
                {header: 'Name', sortable: false, dataIndex: 'name', flex: 3},
                {
                    header: t('remove'),
                    xtype: 'actioncolumn',
                    flex: 1,
                    items: [{
                        tooltip: t('remove'),
                        icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                        handler: function (grid, rowIndex) {
                            grid.getStore().removeAt(rowIndex);
                        }.bind(this)
                    }]
                }
            ],
            stripeRows: true
        });

        assignedGrid.on("rowclick", function (grid, record, tr, rowIndex, e, eOpts) {
            var data = grid.getStore().getAt(rowIndex);

            pimcore.helpers.openObject(data.data.id, data.data.type);
        });

        assignedGrid.on("afterrender", function () {

            var dropTargetEl = assignedGrid.getEl();
            var gridDropTarget = new Ext.dd.DropZone(dropTargetEl, {
                ddGroup: 'element',

                getTargetFromEvent: function (e) {
                    return assignedGrid.getEl().dom;
                }.bind(this),

                onNodeOver: function (overHtmlNode, ddSource, e, data) {
                    data = data.records[0].data;
                    var fromTree = this.isFromTree(ddSource);

                    if (this.dndAllowed(data, fromTree)) {
                        return Ext.dd.DropZone.prototype.dropAllowed;
                    } else {
                        return Ext.dd.DropZone.prototype.dropNotAllowed;
                    }
                }.bind(this),

                onNodeDrop: function (target, dd, event, data) {
                    var element = data.records[0].data;
                    var fromTree = this.isFromTree(dd);

                    if (this.dndAllowed(element, fromTree)) {
                        this.assignedStore.add({id: element.id, name: element.text, type: element.elementType});
                        return true;
                    }

                    return false;
                }.bind(this)
            });
        }.bind(this));

        return assignedGrid;
    },

    isFromTree: function (ddSource) {
        return Ext.getClass(ddSource).getName() === "Ext.tree.ViewDragZone";
    },

    dndAllowed: function (data, fromTree) {
        return data.elementType === 'object' && data.className === "CustomerSegment";
    },

    openSearchEditor: function () {
        pimcore.helpers.itemselector(true, this.addDataFromSelector.bind(this), {
            type: ['object'],
            subtype: {
                object: ['object']
            },
            specific: {
                classes: ['CustomerSegment']
            }
        });
    },

    addDataFromSelector: function (items) {
        if(items.length === 1 && 'undefined' === typeof items[0]) {
            return;
        }

        items.forEach(function(item, index, array) {
            if (!this.assignedStore.getById(item.id)) {
                this.assignedStore.add({
                    id: item.id,
                    name: item.filename,
                    type: item.type
                });
            }
        }, this);

    },

    saveSegmentAssignments: function (type) {

        var breaksInheritance = this.breaksInheritance.items.items[0].checked;
        var segmentIds = [];

        this.assignedStore.data.items.forEach(function(item){
            segmentIds.push(item.id);
        });

        Ext.Ajax.request(
            {
                url: "/admin/customermanagementframework/segment-assignment/assign",
                method: "post",
                params: {
                    id: this.object.id,
                    type: this.type,
                    breaksInheritance: breaksInheritance,
                    segmentIds: JSON.stringify(segmentIds)
                },
                success: function (response) {
                    console.log(response.responseText);
                },
                failure: function(response) {
                    pimcore.helpers.showNotification(t("error"), t("cmf_segmentAssignment_segment_assignment_error"), "error", response.responseText);
                }
            }
        );
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.cmf.config.panel");

pimcore.plugin.cmf.config.panel = Class.create({

    /**
     * @var string
     */
    layoutId: "",

    /**
     * @var array
     */
    trigger: [],

    /**
     * @var array
     */
    condition: [],

    /**
     * @var array
     */
    action: [],


    /**
     * constructor
     * @param layoutId
     */
    initialize: function(layoutId) {

        // init
        this.layoutId = layoutId;

        // add available trigger
        this.trigger = [];
        for(var trigger in pimcore.plugin.cmf.rule.triggers)
        {
            if(trigger != 'AbstractTrigger')
            {
                this.trigger.push( trigger );
            }

        }

        // add available conditions
        this.condition = [];
        for(var condition in pimcore.plugin.cmf.rule.conditions)
        {
            if(condition != 'AbstractCondition')
            {
                this.condition.push( condition );
            }
        }

        // add available actions
        this.action = [];
        for(var action in pimcore.plugin.cmf.rule.actions)
        {
            if(action != 'AbstractAction')
            {
                this.action.push( action );
            }
        }


        // create layout
        this.getLayout();
    },


    /**
     * activate panel
     */
    activate: function () {
        var tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.setActiveItem( this.layoutId );
    },


    /**
     * create tab panel
     * @returns Ext.Panel
     */
    getLayout: function () {

        if (!this.layout) {

            // create new panel
            this.layout = new Ext.Panel({
                id: this.layoutId,
                title: t("plugin_cmf_customerautomationrules"),
                iconCls: "pimcore_icon_customerautomationrules",
                border: false,
                layout: "border",
                closable: true,

                // layout...
                items: [
                    this.getTree(),         // item tree, left side
                    this.getTabPanel()    // edit page, right side
                ]
            });

            // add event listener
            var layoutId = this.layoutId;
            this.layout.on("destroy", function () {
                pimcore.globalmanager.remove( layoutId );
            }.bind(this));

            // add panel to pimcore panel tabs
            var tabPanel = Ext.getCmp("pimcore_panel_tabs");
            tabPanel.add( this.layout );
            tabPanel.setActiveItem( this.layoutId );

            // update layout
            pimcore.layout.refresh();
        }

        return this.layout;
    },


    /**
     * return treelist
     * @returns {*}
     */
    getTree: function () {
        if (!this.tree) {
            var store = Ext.create('Ext.data.TreeStore', {
                proxy: {
                    type: 'ajax',
                    url: "/admin/customermanagementframework/rules/list"
                }
            });

            this.tree = Ext.create('Ext.tree.Panel', {
                region: "west",
                useArrows:true,
                autoScroll:true,
                animate:true,
                containerScroll: true,
                width: 300,
                split: true,
                store: store,
                rootVisible: false,
                root: {
                    allowChildren: true,
                    expanded: true
                }
                ,
                listeners: {
                    itemclick: this.openRule.bind(this),
                    itemcontextmenu: function (tree, record, item, index, e, eOpts ) {
                        e.stopEvent();

                        //this.select();

                        var menu = new Ext.menu.Menu();
                        menu.add(new Ext.menu.Item({
                            text: t('delete'),
                            iconCls: "pimcore_icon_delete",
                            handler: this.deleteRule.bind(this, tree, record)
                        }));

                        menu.showAt(e.pageX, e.pageY);

                    }.bind(this)
                    ,
                    itemmove: function (node, oldParent, newParent, index, eOpts ) {
                        var tree = node.getOwnerTree();
                        var dockedItems = tree.getDockedItems();
                        var toolbar = dockedItems[0];
                        var button = toolbar.down('#cmfCustomerAutomationRulesbtnSave');
                        button.show();
                    }.bind(this),
                    'beforeitemappend': function (thisNode, newChildNode, index, eOpts) {
                        if (newChildNode.data.qtipCfg) {
                            if (newChildNode.data.qtipCfg.title) {
                                newChildNode.data.qtitle = newChildNode.data.qtipCfg.title;
                            }
                            if (newChildNode.data.qtipCfg.text) {
                                newChildNode.data.qtip = newChildNode.data.qtipCfg.text;
                            } else {
                                newChildNode.data.qtip = t("type") + ": "+ t(newChildNode.data.type);
                            }
                        }
                    }
                },
                viewConfig: {
                    plugins: {
                        ptype: 'treeviewdragdrop',
                        appendOnly: false,
                        ddGroup: "element"
                    }
                },

                tbar: {
                    items: [
                        {
                            // add button
                            text: t("plugin_cmf_actiontriggerrule_add_rule"),
                            iconCls: "pimcore_icon_add",
                            handler: this.addRule.bind(this)
                        }, {
                            // spacer
                            xtype: 'tbfill'
                        }
                    ]
                }
            });
        }

        return this.tree;
    },


    /**
     * add item popup
     */
    addRule: function () {
        Ext.MessageBox.prompt(t('plugin_cmf_actiontriggerrule_add_rule'), t('plugin_cmf_actiontriggerrule_add_rule_enter_name'),
            this.addRuleComplete.bind(this), null, null, "");
    },


    /**
     * save added item
     * @param button
     * @param value
     * @param object
     * @todo ...
     */
    addRuleComplete: function (button, value, object) {

        if (button == "ok" && value.length > 0) {
            Ext.Ajax.request({
                url: "/admin/customermanagementframework/rules/add",
                method: "POST",
                params: {
                    name: value,
                    documentId: (this.page ? this.page.id : null)
                },
                success: function (response) {
                    var data = Ext.decode(response.responseText);

                    this.tree.getStore().load({
                        node: this.tree.getRootNode()
                    });

                    if(!data || !data.success) {
                        Ext.Msg.alert(t('plugin_cmf_actiontriggerrule_add_rule_error'), t('plugin_cmf_actiontriggerrule_problem_creating_new_rule'));
                    } else {
                        this.openRule(this.tree, intval(data.id));
                    }
                }.bind(this)
            });
        } else if (button == "cancel") {
            return;
        }
        else {
            Ext.Msg.alert(t('plugin_cmf_actiontriggerrule_add_rule_error'), t('plugin_cmf_actiontriggerrule_problem_creating_new_rule'));
        }
    },


    /**
     * delete existing rule
     */
    deleteRule: function (tree, record) {
        Ext.Ajax.request({
            url: "/admin/customermanagementframework/rules/delete",
            method: "DELETE",
            params: {
                id: record.id
            },
            success: function () {
                this.tree.getStore().load({
                    node: this.tree.getRootNode()
                });
            }.bind(this)
        });
    },


    /**
     * open pricing rule
     * @param node
     */
    openRule: function (tree, record) {

        if(!is_numeric(record)) {
            record = record.id;
        }

        var existingPanel = Ext.getCmp("plugin_cmf_actiontrigger_rule_panel" + record);
        if (existingPanel) {
            this.panel.setActiveTab(existingPanel);
            return;
        }

        // load defined rules
        Ext.Ajax.request({
            url: "/admin/customermanagementframework/rules/get",
            params: {
                id: record
            },
            success: function (response) {
                var res = Ext.decode(response.responseText);
                var item = new pimcore.plugin.cmf.config.rule(this, res);
            }.bind(this)
        });
    },


    /**
     * @returns Ext.TabPanel
     */
    getTabPanel: function () {
        if (!this.panel) {
            this.panel = new Ext.TabPanel({
                region: "center",
                border: false
            });
        }

        return this.panel;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.cmf.config.rule");
pimcore.plugin.cmf.config.rule = Class.create({

    /**
     * pimcore.plugin.cmf.config.panel
     */
    parent: {},

    /**
     * rule configuration
     */
    rule: {},


    /**
     * constructor
     * @param parent
     * @param rule
     */
    initialize: function(parent, rule) {
        this.parent = parent;
        this.rule = rule;
        this.currentIndex = 0;

        this.tabPanel = new Ext.TabPanel({
            activeTab: 0,
            title: Ext.util.Format.htmlEncode(rule.name),
            closable: true,
            deferredRender: false,
            forceLayout: true,
            id: "plugin_cmf_actiontrigger_rule_panel" + rule.id,
            buttons: [{
                text: t("save"),
                iconCls: "pimcore_icon_apply",
                handler: this.save.bind(this)
            }],
            items: [
                this.getSettings(),
                this.getTrigger(),
                this.getConditions(),
                this.getActions()
            ]
        });



        // add saved trigger
        if(this.rule.trigger)
        {
            var rule = this;
            Ext.each(this.rule.trigger, function(trigger){

                rule.addTrigger(ucfirst(trigger.eventName.replace(/plugin\.cmf\./g,'').replace(/-([a-z])/g, function (m, w) {
                    return w.toUpperCase();
                })),trigger);
            });
        }

        // add saved condition
        if(this.rule.condition)
        {
            var rule = this;

            Ext.each(this.rule.condition, function(condition){
                var conditionParts = condition.implementationClass.split('\\');
                var conditionName = conditionParts[conditionParts.length - 1];
                rule.addCondition(conditionName, condition);

            });
        }

        // add saved actions
        if(this.rule.actions)
        {
            var rule = this;
            Ext.each(this.rule.actions, function(action){
                var actionParts = action.implementationClass.split('\\');
                var actionName = actionParts[actionParts.length - 1];
                rule.addAction(actionName, action);

            });
        }

        // ...
        var panel = this.parent.getTabPanel();
        panel.add(this.tabPanel);
        panel.setActiveTab(this.tabPanel);
        panel.updateLayout();
    },

    /**
     * Basic rule Settings
     * @returns Ext.form.FormPanel
     * @todo umbauen
     */
    getSettings: function () {
        this.settingsForm = new Ext.form.FormPanel({
            iconCls: "plugin_cmf_icon_rule_settings",
            title: t("settings"),
            bodyStyle: "padding:10px;",
            autoScroll: true,
            border:false,
            items: [{
                xtype: "textfield",
                name: "name",
                fieldLabel: t("name"),
                width: 350,
                value: this.rule.name,
                renderer: Ext.util.Format.htmlEncode
            }, {
                xtype: "textarea",
                name: "description",
                fieldLabel: t("description"),
                width: 500,
                height: 100,
                value: this.rule.description,
                renderer: Ext.util.Format.htmlEncode
            }, {
                xtype: "checkbox",
                name: "active",
                fieldLabel: t("active"),
                checked: this.rule.active == "1"
            }]
        });

        return this.settingsForm;
    },

    /**
     * @returns Ext.Panel
     */
    getTrigger: function() {

        // init
        var rule = this;
        var complexMenu = {};

        Ext.each(this.parent.trigger, function (method) {

            // get metadata
//            var caption = pimcore.plugin.cmf.rule.triggers[method](null, null, true);

            // triggerDocument_Create_After
            var path = method.replace('trigger', '').split('_');
            var current = complexMenu;
            for(var index in path)
            {
                // add group
                if(!current[ path[index] ])
                {
                    current[ path[index] ] = {};
                }

                // set reference to parent
                current = current[ path[index] ];

                // add handler to the last menu item
                if(index == path.length -1)
                {
                    var trigger = new pimcore.plugin.cmf.rule.triggers[method]({});

                    // add metadata to the last point
                    current.text = trigger.getNiceName();
                    current.iconCls = trigger.getIcon();
                    current.handler = rule.addTrigger.bind(rule, method);
                }
            }
        });


        /**
         * create recursive menu
         * @param menu
         * @param path
         * @returns {Array}
         */
        var getMenu = function( menu, path ) {
            var m = [];
            for(var key in menu)
            {
                if(menu[key].handler)
                {
                    m.push( menu[key] );
                }
                else
                {
                    m.push({
                        iconCls: 'plugin_cmf_icon_rule_triggers' + path + key,
                        text: key,
                        menu: getMenu( menu[key], path + key + '_' )
                    })
                }
            }

            return m;
        };


        this.triggerContainer = new Ext.Panel({
            iconCls: "plugin_cmf_icon_rule_triggers",
            title: t("plugin_cmf_icon_rule_triggers"),
            autoScroll: true,
            forceLayout: true,
            bodyStyle: 'padding: 0 10px 10px 10px;',
            tbar: [{
                iconCls: "pimcore_icon_add",
                menu: getMenu( complexMenu, '' )
            }],
            border: false
        });

        return this.triggerContainer;
    },

    /**
     * @returns Ext.Panel
     */
    getConditions: function() {

        // init
        var rule = this;
        var addMenu = [];

        // add conditions
        Ext.each(this.parent.condition, function (method) {

            var condition = new pimcore.plugin.cmf.rule.conditions[method]({});

            addMenu.push({
                iconCls: condition.getIcon(),
                text: condition.getNiceName(),
                handler: rule.addCondition.bind(rule, method)
            });
        });


        this.conditionsContainer = new Ext.Panel({
            iconCls: "plugin_cmf_icon_rule_conditions",
            title: t("conditions"),
            autoScroll: true,
            forceLayout: true,
            tbar: [{
                iconCls: "pimcore_icon_add",
                menu: addMenu
            }],
            border: false
        });

        return this.conditionsContainer;
    },

    /**
     * @returns {*}
     * @todo
     */
    getActions: function () {

        // init
        var rule = this;
        var addMenu = [];

        // show only defined actions
        Ext.each(this.parent.action, function (method) {
            var action = new pimcore.plugin.cmf.rule.actions[method]({});

            addMenu.push({
                iconCls: action.getIcon(),
                text: action.getNiceName(),
                handler: rule.addAction.bind(rule, method, {options:{}})
            });
        });


        this.actionsContainer = new Ext.Panel({
            iconCls: "plugin_cmf_icon_rule_actions",
            title: t("actions"),
            autoScroll: true,
            bodyStyle: 'padding: 0 10px 10px 10px;',
            forceLayout: true,
            tbar: [{
                iconCls: "pimcore_icon_add",
                menu: addMenu
            }],
            border: false
        });

        return this.actionsContainer;
    },


    /**
     * add trigger item
     * @param type
     * @param data
     */
    addTrigger: function (event, data) {


        // check params
        if(typeof data == "undefined") {
            data = {};
        }
        var trigger = new pimcore.plugin.cmf.rule.triggers[event](data);

        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            event: trigger.getEventName(),
            forceLayout: true,
            border: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px;",
            id:myId,
            tbar: trigger.getTopBar(myId, this),
            items: trigger.getFormItems()
        });

        this.triggerContainer.add(item);
        item.updateLayout();
        this.triggerContainer.updateLayout();
    },

    /**
     * add condition item
     * @param type
     * @param data
     */
    addCondition: function (type, data) {
        // create condition
        var condition = new pimcore.plugin.cmf.rule.conditions[type](data);


        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        // create item
        var myId = Ext.id();
        var item =  new Ext.form.FormPanel({
            implementationClass: condition.getImplementationClass(),
            conditionData: data,
            id: myId,
            type: 'Admin',
            forceLayout: true,

            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px; min-height: 40px;",
            tbar: condition.getTopBar(myId, this),
            items: condition.getFormItems()
        });
        //add custom save handler for condition if available
        if(condition.customSaveHandler !== undefined) {
            item.customSaveHandler = condition.customSaveHandler.bind(condition);
        }


        // add logic for brackets
        var tab = this;
        item.on("afterrender", function (el) {
            el.getEl().applyStyles({position: "relative", "min-height": "40px"});
            var leftBracket = el.getEl().insertHtml("beforeEnd",
                                '<div class="pimcore_targeting_bracket pimcore_targeting_bracket_left">(</div>', true);
            var rightBracket = el.getEl().insertHtml("beforeEnd",
                                '<div class="pimcore_targeting_bracket pimcore_targeting_bracket_right">)</div>', true);

            if(data["bracketLeft"]){
                leftBracket.addCls("pimcore_targeting_bracket_active");
            }
            if(data["bracketRight"]){
                rightBracket.addCls("pimcore_targeting_bracket_active");
            }

            // open
            leftBracket.on("click", function (ev, el) {
                var bracket = Ext.get(el);
                bracket.toggleCls("pimcore_targeting_bracket_active");

                tab.recalculateBracketIdent(tab.conditionsContainer.items);
            });

            // close
            rightBracket.on("click", function (ev, el) {
                var bracket = Ext.get(el);
                bracket.toggleCls("pimcore_targeting_bracket_active");

                tab.recalculateBracketIdent(tab.conditionsContainer.items);
            });

            // make ident
            tab.recalculateBracketIdent(tab.conditionsContainer.items);
        });
        this.conditionsContainer.add(item);
        item.updateLayout();
        this.conditionsContainer.updateLayout();

        this.currentIndex++;

        this.recalculateButtonStatus();
    },

    /**
     * add action item
     * @param type
     * @param data
     */
    addAction: function (actionName, data) {

        // check params
        if(typeof data == "undefined") {
            data = {};
        }

        var action = new pimcore.plugin.cmf.rule.actions[actionName](data);

        var myId = Ext.id();

        var formItems = action.getFormItems();

        formItems.push({
            xtype: "fieldcontainer",

            layout: {
            type: 'table',
                tdAttrs: {
                valign: 'center'
            }
        },
            items: [{
                xtype: "numberfield",
                name: "actionDelayGuiValue",
                fieldLabel: t("plugin_cmf_actiontriggerrule_actionDelay"),
                width: 200,
                value: data.options.actionDelayGuiValue ? data.options.actionDelayGuiValue : 0,
            },{
                xtype: "combobox",
                name: "actionDelayGuiType",
                width: 110,
                store: Ext.data.ArrayStore({
                    fields: ['name','label'],
                    data : [['m',t('minutes')],['h',t('hours')],['d',t('days')]]
                }),
                value: data.options.actionDelayGuiType ? data.options.actionDelayGuiType : 'm',
                displayField: 'label',
                valueField: 'name'
            }]
        });

        var item =  new Ext.form.FormPanel({
            implementationClass: action.getImplementationClass(),
            actionData: data,
            forceLayout: true,
            border: true,
            style: "margin: 10px 0 0 0",
            bodyStyle: "padding: 10px 30px 10px 30px;",
            id:myId,
            tbar: action.getTopBar(myId, this),
            items: formItems
        });

        this.actionsContainer.add(item);
        item.updateLayout();
        this.actionsContainer.updateLayout();
    },

    /**
     * save config
     * @todo
     */
    save: function () {
        var saveData = {};

        // general settings
        saveData["settings"] = this.settingsForm.getForm().getFieldValues();

        // get defined triggers
        var triggerData = [];
        var triggers = this.triggerContainer.items.getRange();
        for (var i=0; i<triggers.length; i++) {
            triggerData.push({
                eventName: triggers[i].event,
                options: triggers[i].getForm().getFieldValues()
            });
        }
        saveData["trigger"] = triggerData;
        

        // get defined conditions
        var conditions = this.conditionsContainer.items.getRange();
        var conditionsData = [];
        for (var i=0; i<conditions.length; i++) {
            var options = conditions[i].getForm().getFieldValues();
            if(conditions[i].customSaveHandler !== undefined) {
                options = conditions[i].customSaveHandler();
            }

            // get the operator (AND, OR, AND_NOT)
            var tb = conditions[i].getDockedItems()[0];
            var operator = null;
            if (tb.getComponent("toggle_or").pressed) {
                operator = "or";
            } else if (tb.getComponent("toggle_and_not").pressed) {
                operator = "and_not";
            } else {
                operator = "and";
            }

            conditionsData.push({
                implementationClass: conditions[i].implementationClass,
                bracketLeft: Ext.get(conditions[i].getEl().query(".pimcore_targeting_bracket_left")[0]).hasCls("pimcore_targeting_bracket_active"),
                bracketRight: Ext.get(conditions[i].getEl().query(".pimcore_targeting_bracket_right")[0]).hasCls("pimcore_targeting_bracket_active"),
                operator: operator,
                options: options
            });
        }
        saveData["conditions"] = conditionsData;

        // get defined actions
        var actionData = [];
        var actions = this.actionsContainer.items.getRange();
        for (var i=0; i<actions.length; i++) {

            var options = actions[i].getForm().getFieldValues();
            var actionDelay = options.actionDelay;
            delete options.actionDelay;

            actionData.push({
                implementationClass: actions[i].implementationClass,
                id: actions[i].actionData.id,
                creationDate: actions[i].actionData.creationDate,
                options: options,
                actionDelay: actionDelay
            });
        }
        saveData["actions"] = actionData;

        // send data
        Ext.Ajax.request({
            url: "/admin/customermanagementframework/rules/save",
            params: {
                id: this.rule.id,
                data: Ext.encode(saveData)
            },
            method: "PUT",
            success: this.saveOnComplete.bind(this)
        });
    },

    /**
     * saved
     */
    saveOnComplete: function () {
        var tree = this.parent.getTree();
        tree.getStore().load({
            node: tree.getRootNode()
        });

        pimcore.helpers.showNotification(t("success"), t("plugin_cmf_actiontrigger_rule_saved_successfully"), "success");
    },

    recalculateButtonStatus: function () {
        var conditions = this.conditionsContainer.items.getRange();
        var tb;
        for (var i=0; i<conditions.length; i++) {
            tb = conditions[i].getDockedItems()[0];
            if(i==0) {
                tb.getComponent("toggle_and").hide();
                tb.getComponent("toggle_or").hide();
                tb.getComponent("toggle_and_not").hide();
            } else {
                tb.getComponent("toggle_and").show();
                tb.getComponent("toggle_or").show();
                tb.getComponent("toggle_and_not").show();
            }
        }
    },

    /**
     * make ident for bracket
     * @param list
     */
    recalculateBracketIdent: function(list) {
        var ident = 0, lastIdent = 0, margin = 20;
        var colors = ["transparent","#007bff", "#00ff99", "#e1a6ff", "#ff3c00", "#000000"];

        list.each(function (condition) {

            // only rendered conditions
            if(condition.rendered == false)
                return;

            // html from this condition
            var item = condition.getEl();


            // apply ident margin
            item.applyStyles({
                "margin-left": margin * ident + "px",
                "margin-right": margin * ident + "px"
            });


            // apply colors
            if(ident > 0)
                item.applyStyles({
                    "border-left": "1px solid " + colors[ident],
                    "border-right": "1px solid " + colors[ident]
                });
            else
                item.applyStyles({
                    "border-left": "0px",
                    "border-right": "0px"
                });


            // apply specials :-)
            if(ident == 0)
                item.applyStyles({
                    "margin-top": "10px"
                });
            else if(ident == lastIdent)
                item.applyStyles({
                    "margin-top": "0px",
                    "margin-bottom": "0px"
                });
            else
                item.applyStyles({
                    "margin-top": "5px"
                });


            // remember current ident
            lastIdent = ident;


            // check if a bracket is open
            if(item.select('.pimcore_targeting_bracket_left.pimcore_targeting_bracket_active').getCount() == 1)
            {
                ident++;
            }
            // check if a bracket is close
            else if(item.select('.pimcore_targeting_bracket_right.pimcore_targeting_bracket_active').getCount() == 1)
            {
                if(ident > 0)
                    ident--;
            }
        });
        this.conditionsContainer.updateLayout();
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


/**
 * trigger TYPES
 */
pimcore.registerNS("pimcore.plugin.cmf.rule.triggers");

pimcore.registerNS("pimcore.plugin.cmf.rule.triggers.AbstractTrigger");
pimcore.plugin.cmf.rule.triggers.AbstractTrigger = Class.create({
    name: '',
    eventName: '',
    data: {},
    options: {},

    initialize: function (data) {

        this.data = data;
        this.options = typeof data.options == 'object' ? data.options : {}
    },

    getIcon: function(){
        return 'plugin_cmf_icon_actiontriggerrule_' + this.name
    },

    getEventName: function() {
        return this.eventName;
    },

    getId: function() {
        return 'plugin_cmf_actiontriggerrule_trigger' + this.name
    },

    getNiceName: function() {
        return t(this.getId());
    },

    getFormItems: function() {
        return [];
    },

    getTopBar: function (index, parent) {
        return [
            {
                iconCls: this.getIcon(),
                disabled: true
            },
            {
                xtype: "tbtext",
                text: "<b>" + this.getNiceName() + "</b>"
            },
            "->",
            {
                iconCls: "pimcore_icon_delete",
                handler: function (index, parent) {
                    parent.triggerContainer.remove(Ext.getCmp(index));
                }.bind(window, index, parent)
            }];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.triggers.NewActivity");
pimcore.plugin.cmf.rule.triggers.NewActivity = Class.create(pimcore.plugin.cmf.rule.triggers.AbstractTrigger,{
    name: 'NewActivity',
    eventName: 'plugin.cmf.new-activity',
    getFormItems: function() {

        return [{
            xtype: "combo",
            name: "type",
            fieldLabel: t("type"),
            width: 350,
            value: this.options.type,
            triggerAction: "all",
            mode: "local",
            disableKeyFilter: true,
            store: new Ext.data.JsonStore({
                proxy: {
                    autoDestroy: true,
                    type: 'ajax',
                    url: '/admin/customermanagementframework/helper/activity-types'
                },
                fields: ['name']
            }),
            valueField: 'name',
            displayField: 'name',
            listeners: {
                afterrender: function (el) {
                    el.getStore().load();
                }
            }
        }];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.triggers.CronTrigger");
pimcore.plugin.cmf.rule.triggers.CronTrigger = Class.create(pimcore.plugin.cmf.rule.triggers.AbstractTrigger,{
    name: 'Cron',
    eventName: 'plugin.cmf.cron-trigger',
    getFormItems: function() {

        return [{
            xtype: "textfield",
            name: "definition",
            fieldLabel: t("plugin_cmf_actiontriggerrule_cron_definition") + ' (<a href="https://crontab.guru/" target="blank">'+t("plugin_cmf_actiontriggerrule_cron_croneditor")+'</a>)',
            width: 350,
            labelWidth: 200,
            value: this.options.definition
        }];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.triggers.ExecuteSegmentBuilders");
pimcore.plugin.cmf.rule.triggers.ExecuteSegmentBuilders = Class.create(pimcore.plugin.cmf.rule.triggers.AbstractTrigger,{
    name: 'ExecuteSegmentBuilders',
    eventName: 'plugin.cmf.execute-segment-builders'
});

pimcore.registerNS("pimcore.plugin.cmf.rule.triggers.SegmentTracked");
pimcore.plugin.cmf.rule.triggers.SegmentTracked = Class.create(pimcore.plugin.cmf.rule.triggers.AbstractTrigger, {
    name: 'SegmentTracked',
    eventName: 'plugin.cmf.segment-tracked'
});

pimcore.registerNS("pimcore.plugin.cmf.rule.triggers.TargetGroupAssigned");
pimcore.plugin.cmf.rule.triggers.TargetGroupAssigned = Class.create(pimcore.plugin.cmf.rule.triggers.AbstractTrigger,{
    name: 'TargetGroupAssigned',
    eventName: 'plugin.cmf.target-group-assigned',
    getFormItems: function() {

        return [
            {
                fieldLabel: t("plugin_cmf_automationtrigger_assign_target_group_type"),
                xtype: "combobox",
                labelWidth: 200,
                name: "assignmentType",
                width: 500,
                store: Ext.data.ArrayStore({
                    fields: ['assignmentType', 'assignmentTypeTranslated'],
                    data: [
                        ['all', t('plugin_cmf_automationtrigger_assign_target_group_all')],
                        ['documents', t('plugin_cmf_automationtrigger_assign_target_group_documents')],
                        ['targetingRules', t('plugin_cmf_automationtrigger_assign_target_group_targetingRules')]
                    ]
                }),
                value: this.options.assignmentType ? this.options.assignmentType : 'all',
                displayField: 'assignmentTypeTranslated',
                valueField: 'assignmentType'
            }
        ];
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


/**
 * trigger TYPES
 */
pimcore.registerNS("pimcore.plugin.cmf.rule.conditions");

pimcore.registerNS("pimcore.plugin.cmf.rule.conditions.AbstractCondition");
pimcore.plugin.cmf.rule.conditions.AbstractCondition = Class.create({
    name: '',
    data: {},
    options: {},
    implementationClass: '',

    initialize: function (data) {

        this.data = data;
        this.options = typeof data.options == 'object' ? data.options : {}
    },

    getIcon: function(){
        return 'plugin_cmf_icon_actiontriggerrule_' + this.name
    },

    getId: function() {
        return 'plugin_cmf_actiontriggerrule_condition' + this.name
    },

    getNiceName: function() {
        return t(this.getId());
    },

    getImplementationClass: function() {
        return this.implementationClass;
    },


    getFormItems: function() {
        return [];
    },

    getTopBar: function (index, parent) {
        var me = this;

        var data = this.data;


        var toggleGroup = "g_" + index + parent.rule.id;
        if(!data["operator"]) {
            data.operator = "and";
        }

        return [{
            iconCls: this.getIcon(),
            disabled: true
        }, {
            xtype: "tbtext",
            text: "<b>" + this.getNiceName() + "</b>"
        },"-",{
            iconCls: "pimcore_icon_up",
            handler: function (blockId, parent) {

                var container = parent.conditionsContainer;
                var blockElement = Ext.getCmp(blockId);
                var index = me.detectBlockIndex(blockElement, container);

                var newIndex = index-1;
                if(newIndex < 0) {
                    newIndex = 0;
                }

                container.remove(blockElement, false);
                container.insert(newIndex, blockElement);

                parent.recalculateButtonStatus();
                parent.recalculateBracketIdent(parent.conditionsContainer.items);

                pimcore.layout.refresh();
            }.bind(window, index, parent)
        },{
            iconCls: "pimcore_icon_down",
            handler: function (blockId, parent) {

                var container = parent.conditionsContainer;
                var blockElement = Ext.getCmp(blockId);
                var index = me.detectBlockIndex(blockElement, container);

                container.remove(blockElement, false);
                container.insert(index+1, blockElement);

                parent.recalculateButtonStatus();
                parent.recalculateBracketIdent(parent.conditionsContainer.items);

                pimcore.layout.refresh();

            }.bind(window, index, parent)
        },"-", {
            text: t("AND"),
            toggleGroup: toggleGroup,
            enableToggle: true,
            itemId: "toggle_and",
            pressed: (data.operator == "and") ? true : false
        },{
            text: t("OR"),
            toggleGroup: toggleGroup,
            enableToggle: true,
            itemId: "toggle_or",
            pressed: (data.operator == "or") ? true : false
        },{
            text: t("AND_NOT"),
            toggleGroup: toggleGroup,
            enableToggle: true,
            itemId: "toggle_and_not",
            pressed: (data.operator == "and_not") ? true : false
        },"->",{
            iconCls: "pimcore_icon_delete",
            handler: function (index, parent) {
                parent.conditionsContainer.remove(Ext.getCmp(index));
                parent.recalculateButtonStatus();
                parent.recalculateBracketIdent(parent.conditionsContainer.items);
            }.bind(window, index, parent)
        }];
    },

    /**
     * macro to get the right index
     * @param blockElement
     * @param container
     * @returns {*}
     */
    detectBlockIndex: function (blockElement, container) {
        // detect index
        var index;

        for(var s=0; s<container.items.items.length; s++) {
            if(container.items.items[s].getId() == blockElement.getId()) {
                index = s;
                break;
            }
        }
        return index;
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.conditions.CountActivities");
pimcore.plugin.cmf.rule.conditions.CountActivities = Class.create(pimcore.plugin.cmf.rule.conditions.AbstractCondition,{
    name: 'CountActivities',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Condition\\CountActivities',
    getFormItems: function () {

        return [
            {
                xtype: "combo",
                name: "type",
                fieldLabel: t("plugin_cmf_actiontriggerrule_countactivities_type"),
                width: 450,
                labelWidth: 160,
                value: this.options.type,
                triggerAction: "all",
                mode: "local",
                disableKeyFilter: true,
                store: new Ext.data.JsonStore({
                    proxy: {
                        autoDestroy: true,
                        type: 'ajax',
                        url: '/admin/customermanagementframework/helper/activity-types'
                    },
                    fields: ['name']
                }),
                valueField: 'name',
                displayField: 'name',
                listeners: {
                    afterrender: function (el) {
                        el.getStore().load();
                    }
                }
            },
            {
                xtype: "fieldcontainer",
                fieldLabel: t("plugin_cmf_actiontriggerrule_number_condition"),
                labelWidth: 50,
                layout: {
                    type: 'table',
                    tdAttrs: {
                        valign: 'center'
                    }
                },
                items: [
                    {
                        xtype: "combobox",
                        name: "operator",
                        width: 270,
                        store: Ext.data.ArrayStore({
                            fields: ['operator', 'label'],
                            data: [
                                ['%', t('plugin_cmf_actiontriggerrule_number_condition_%')],
                                ['=', t('plugin_cmf_actiontriggerrule_number_condition_=')],
                                ['<', t('plugin_cmf_actiontriggerrule_number_condition_<')],
                                ['<=', t('plugin_cmf_actiontriggerrule_number_condition_<=')],
                                ['>', t('plugin_cmf_actiontriggerrule_number_condition_>')],
                                ['>=', t('plugin_cmf_actiontriggerrule_number_condition_>=')]
                            ]
                        }),
                        value: this.options.operator ? this.options.operator : '=',
                        displayField: 'label',
                        valueField: 'operator'
                    },
                    {
                        xtype: "numberfield",
                        name: "count",
                        width: 90,
                        value: this.options.count
                    }
                ]
            }


        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.conditions.Segment");
pimcore.plugin.cmf.rule.conditions.Segment = Class.create(pimcore.plugin.cmf.rule.conditions.AbstractCondition,{
    name: 'Segment',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Condition\\Segment',
    getFormItems: function () {

        return [
            {
                name: "segment",
                fieldLabel: t('segment'),
                xtype: "textfield",
                width: 500,
                cls: "input_drop_target",
                value: this.options.segment,
                listeners: {
                    "render": function (el) {
                        new Ext.dd.DropZone(el.getEl(), {
                            reference: this,
                            ddGroup: "element",
                            getTargetFromEvent: function (e) {
                                return this.getEl();
                            }.bind(el),

                            onNodeOver: function (target, dd, e, data) {


                                data = data.records[0].data;

                                if(data.type != 'object') {
                                    return Ext.dd.DropZone.prototype.dropNotAllowed;
                                }


                                if(data.className != 'CustomerSegment') {
                                    return Ext.dd.DropZone.prototype.dropNotAllowed;
                                }

                                return Ext.dd.DropZone.prototype.dropAllowed;
                            },

                            onNodeDrop: function (target, dd, e, data) {


                                data = data.records[0].data;

                                if(data.type != 'object') {
                                    return false;
                                }

                                if(data.className != 'CustomerSegment') {
                                    return false;
                                }

                                this.setValue(data.path);
                                return true;
                            }.bind(el)
                        });
                    }
                }
            },
            {
                xtype: "checkbox",
                name:'not',
                value:this.options.not,
                fieldLabel: t("plugin_cmf_actiontriggerrule_not"),
                layout: {
                    type: 'table',
                    tdAttrs: {
                        valign: 'center'
                    }
                }
            }


        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.conditions.Customer");
pimcore.plugin.cmf.rule.conditions.Customer = Class.create(pimcore.plugin.cmf.rule.conditions.AbstractCondition,{
    name: 'Customer',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Condition\\Customer',
    getFormItems: function () {

        return [
            {
                name: "customer",
                fieldLabel: t('plugin_cmf_customer'),
                xtype: "textfield",
                width: 500,
                cls: "input_drop_target",
                value: this.options.customer,
                listeners: {
                    "render": function (el) {
                        new Ext.dd.DropZone(el.getEl(), {
                            reference: this,
                            ddGroup: "element",
                            getTargetFromEvent: function (e) {
                                return this.getEl();
                            }.bind(el),

                            onNodeOver: function (target, dd, e, data) {


                                data = data.records[0].data;

                                if(data.type != 'object') {
                                    return Ext.dd.DropZone.prototype.dropNotAllowed;
                                }


                                return Ext.dd.DropZone.prototype.dropAllowed;
                            },

                            onNodeDrop: function (target, dd, e, data) {


                                data = data.records[0].data;

                                if(data.type != 'object') {
                                    return false;
                                }

                                this.setValue(data.path);
                                return true;
                            }.bind(el)
                        });
                    }
                }
            },
            {
                xtype: "checkbox",
                name:'not',
                value:this.options.not,
                fieldLabel: t("plugin_cmf_actiontriggerrule_not"),
                layout: {
                    type: 'table',
                    tdAttrs: {
                        valign: 'center'
                    }
                }
            }


        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.conditions.CountTrackedSegment");
pimcore.plugin.cmf.rule.conditions.CountTrackedSegment = Class.create(pimcore.plugin.cmf.rule.conditions.AbstractCondition,{
    name: 'CountTrackedSegment',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Condition\\CountTrackedSegment',

    customSaveHandler: function() {
        return {
            'count': this.countField.getValue(),
            'operator': this.operatorField.getValue(),
            'segments': this.objectList.getValue()
        };
    },

    getFormItems: function () {
        var segments = this.options ? this.options.segments : [];

        this.objectList = new pimcore.bundle.EcommerceFramework.pricing.config.objects(segments, {
            classes: [
                "CustomerSegment"
            ],
            name: "segments",
            title: t("plugin_cmf_actiontriggerrule_for_condition_segments"),
            visibleFields: "path",
            height: 200,
            width: 600,
            columns: [],

            // ?
            columnType: null,
            datatype: "data",
            fieldtype: "objects",

            // ??
            index: false,
            invisible: false,
            lazyLoading: false,
            locked: false,
            mandatory: false,
            maxItems: "",
            noteditable: false,
            permissions: null,
            phpdocType: "array",
            queryColumnType: "text",
            relationType: true,
            style: "",
            tooltip: "",
            visibleGridView: false,
            visibleSearch: false
        });

        this.operatorField = Ext.create('Ext.form.field.ComboBox', {
            //xtype: "combobox",
            name: "operator",
            width: 270,
            store: Ext.data.ArrayStore({
                fields: ['operator', 'label'],
                data: [
                    ['%', t('plugin_cmf_actiontriggerrule_number_condition_%')],
                    ['=', t('plugin_cmf_actiontriggerrule_number_condition_=')],
                    ['<', t('plugin_cmf_actiontriggerrule_number_condition_<')],
                    ['<=', t('plugin_cmf_actiontriggerrule_number_condition_<=')],
                    ['>', t('plugin_cmf_actiontriggerrule_number_condition_>')],
                    ['>=', t('plugin_cmf_actiontriggerrule_number_condition_>=')]
                ]
            }),
            value: this.options.operator ? this.options.operator : '>=',
            displayField: 'label',
            valueField: 'operator'
        });
        this.countField = Ext.create('Ext.form.field.Number', {
            //xtype: "numberfield",
            name: "count",
            width: 90,
            value: this.options.count
        });

        return [
            {
                xtype: "fieldcontainer",
                fieldLabel: t("plugin_cmf_actiontriggerrule_number_condition"),
                labelWidth: 50,
                layout: {
                    type: 'table',
                    tdAttrs: {
                        valign: 'center'
                    }
                },
                items: [
                    this.operatorField,
                    this.countField
                ]
            },
            {
                xtype: "fieldcontainer",
                fieldLabel: t("plugin_cmf_actiontriggerrule_for_condition"),
                labelWidth: 50,
                height: 220,
                layout: {
                    type: 'vbox'
                },
                items: [
                    this.objectList.getLayoutEdit(),
                    {
                        xtype: 'panel',
                        html: t("plugin_cmf_actiontriggerrule_for_condition_empty_all")
                    }
                ]
            }
        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.conditions.CountTargetGroupWeight");
pimcore.plugin.cmf.rule.conditions.CountTargetGroupWeight = Class.create(pimcore.plugin.cmf.rule.conditions.AbstractCondition,{
    name: 'CountTargetGroupWeight',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Condition\\CountTargetGroupWeight',
    getFormItems: function () {
        return [
            {
                xtype: "fieldcontainer",
                fieldLabel: t("plugin_cmf_actiontriggerrule_number_condition"),
                labelWidth: 50,
                layout: {
                    type: 'table',
                    tdAttrs: {
                        valign: 'center'
                    }
                },
                items: [
                    {
                        xtype: "combobox",
                        name: "operator",
                        width: 270,
                        store: Ext.data.ArrayStore({
                            fields: ['operator', 'label'],
                            data: [
                                ['%', t('plugin_cmf_actiontriggerrule_number_condition_%')],
                                ['=', t('plugin_cmf_actiontriggerrule_number_condition_=')],
                                ['<', t('plugin_cmf_actiontriggerrule_number_condition_<')],
                                ['<=', t('plugin_cmf_actiontriggerrule_number_condition_<=')],
                                ['>', t('plugin_cmf_actiontriggerrule_number_condition_>')],
                                ['>=', t('plugin_cmf_actiontriggerrule_number_condition_>=')]
                            ]
                        }),
                        value: this.options.operator ? this.options.operator : '>=',
                        displayField: 'label',
                        valueField: 'operator'
                    },
                    {
                        xtype: "numberfield",
                        name: "count",
                        width: 90,
                        value: this.options.count
                    }
                ]
            },
            {
                xtype: "fieldcontainer",
                fieldLabel: t("plugin_cmf_actiontriggerrule_for_condition"),
                labelWidth: 50,
                height: 210,
                layout: {
                    type: 'vbox'
                },
                items: [
                    {
                        xtype: "multiselect",
                        name: "targetGroup",
                        displayField: 'text',
                        valueField: "id",
                        store: pimcore.globalmanager.get("target_group_store"),
                        editable: false,
                        width: 365,
                        triggerAction: 'all',
                        height: 180,
                        mode: "local",
                        value: this.options.targetGroup,
                        emptyText: t("select_a_target_group")
                    },
                    {
                        xtype: 'panel',
                        html: t("plugin_cmf_actiontriggerrule_for_condition_empty_all")
                    }
                ]
            }

        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.conditions.CustomerField");
pimcore.plugin.cmf.rule.conditions.CustomerField = Class.create(pimcore.plugin.cmf.rule.conditions.AbstractCondition,{
    name: 'CustomerField',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Condition\\CustomerField',
    getFormItems: function () {
        return [
            {
                xtype: 'panel',
                html: '<div style="margin-bottom: 10px; padding: 5px 10px; background-color: #d9edf7; border-color: #bce8f1 !important; color: #31708f;">' + t("plugin_cmf_actiontriggerrule_customerfield_explanation") + '</div>'
            },
            {
                xtype: "fieldcontainer",
                layout: {
                    type: 'table',
                    tdAttrs: {
                        valign: 'center'
                    }
                },
                items: [
                    {
                        xtype: "textfield",
                        fieldLabel: t("plugin_cmf_actiontriggerrule_fieldname_condition"),
                        name: "fieldname",
                        style: "margin-right: 10px;",
                        width: 365,
                        value: this.options.fieldname,
                    },
                    {
                        xtype: "textfield",
                        fieldLabel: t("plugin_cmf_actiontriggerrule_fieldvalue_condition"),
                        name: "fieldvalue",
                        width: 365,
                        value: this.options.fieldvalue
                    }
                ]
            },
            {
                xtype: "checkbox",
                name:'not',
                value:this.options.not,
                fieldLabel: t("plugin_cmf_actiontriggerrule_not"),
                layout: {
                    type: 'table',
                    tdAttrs: {
                        valign: 'center'
                    }
                }
            }

        ];
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


/**
 * trigger TYPES
 */
pimcore.registerNS("pimcore.plugin.cmf.rule.actions");

pimcore.registerNS("pimcore.plugin.cmf.rule.actions.AbstractAction");
pimcore.plugin.cmf.rule.actions.AbstractAction = Class.create({
    name: '',
    data: {},
    options: {},
    implementationClass: '',

    initialize: function (data) {

        this.data = data;
        this.options = typeof data.options == 'object' ? data.options : {}
    },

    getIcon: function(){
        return 'plugin_cmf_icon_actiontriggerrule_' + this.name
    },

    getId: function() {
        return 'plugin_cmf_actiontriggerrule_action' + this.name
    },

    getNiceName: function() {
        return t(this.getId());
    },

    getImplementationClass: function() {
        return this.implementationClass;
    },


    getFormItems: function() {
        return [];
    },

    getTopBar: function (index, parent) {
        return [
            {
                iconCls: this.getIcon(),
                disabled: true
            },
            {
                xtype: "tbtext",
                text: "<b>" + this.getNiceName() + "</b>"
            },
            "->",
            {
                iconCls: "pimcore_icon_delete",
                handler: function (index, parent) {
                    parent.actionsContainer.remove(Ext.getCmp(index));
                }.bind(window, index, parent)
            }];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.actions.ChangeFieldValue");
pimcore.plugin.cmf.rule.actions.ChangeFieldValue = Class.create(pimcore.plugin.cmf.rule.actions.AbstractAction,{
    name: 'ChangeFieldValue',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Action\\ChangeFieldValue',
    getFormItems: function() {

        return [
            {
                xtype: "combo",
                name: "field",
                fieldLabel: t("plugin_cmf_actiontriggerrule_changefieldvalue_field"),
                width: 450,
                value: this.options.field,
                triggerAction: "all",
                mode: "local",
                disableKeyFilter: true,
                store: new Ext.data.JsonStore({
                    proxy: {
                        autoDestroy: true,
                        type: 'ajax',
                        url: '/admin/customermanagementframework/helper/customer-field-list'
                    },
                    fields: ['name','label']
                }),
                valueField: 'name',
                displayField: 'label',
                listeners: {
                    afterrender: function (el) {
                        el.getStore().load();
                    }
                }
            },
            {
                xtype: "textfield",
                name: "value",
                fieldLabel: t("plugin_cmf_actiontriggerrule_changefieldvalue_value"),
                width: 450,
                value: this.options.value,
                triggerAction: "all"
            }
        ];
    }
});


pimcore.registerNS("pimcore.plugin.cmf.rule.actions.AddSegment");
pimcore.plugin.cmf.rule.actions.AddSegment = Class.create(pimcore.plugin.cmf.rule.actions.AbstractAction,{
    name: 'AddSegment',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Action\\AddSegment',
    getFormItems: function() {

        return [{
            name: "segment",
            fieldLabel: t('segment'),
            xtype: "textfield",
            width: 500,
            cls: "input_drop_target",
            value: this.options.segment,
            listeners: {
                "render": function (el) {
                    new Ext.dd.DropZone(el.getEl(), {
                        reference: this,
                        ddGroup: "element",
                        getTargetFromEvent: function (e) {
                            return this.getEl();
                        }.bind(el),

                        onNodeOver: function (target, dd, e, data) {


                            data = data.records[0].data;

                            if(data.type != 'object') {
                                return Ext.dd.DropZone.prototype.dropNotAllowed;
                            }


                            if(data.className != 'CustomerSegment') {
                                return Ext.dd.DropZone.prototype.dropNotAllowed;
                            }

                            return Ext.dd.DropZone.prototype.dropAllowed;
                        },

                        onNodeDrop: function (target, dd, e, data) {


                            data = data.records[0].data;

                            if(data.type != 'object') {
                                return false;
                            }

                            if(data.className != 'CustomerSegment') {
                                return false;
                            }

                            this.setValue(data.path);
                            return true;
                        }.bind(el)
                    });
                }
            }
        },
            {
                name: "removeOtherSegmentsFromGroup",
                fieldLabel: t('plugin_cmf_actiontriggerrule_addsegment_remove-other-segments-from-group'),
                xtype: "checkbox",
                width: 500,
                labelWidth: 350,
                value: this.options.removeOtherSegmentsFromGroup
            },
            {
                name: "increaseSegmentApplicationCounter",
                fieldLabel: t('plugin_cmf_actiontriggerrule_addsegment_increase-segment-application-counter'),
                xtype: "checkbox",
                width: 500,
                labelWidth: 350,
                value: this.options.increaseSegmentApplicationCounter
            },
            {
                xtype: "checkbox",
                labelWidth: 350,
                width: 500,
                name: "considerProfilingConsent",
                fieldLabel: t("plugin_cmf_actiontriggerrule_consider_profiling_consent"),
                checked: typeof this.options.considerProfilingConsent == 'undefined' ? true : this.options.considerProfilingConsent
            }
        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.actions.AddTrackedSegment");
pimcore.plugin.cmf.rule.actions.AddTrackedSegment = Class.create(pimcore.plugin.cmf.rule.actions.AbstractAction,{
    name: 'AddTrackedSegment',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Action\\AddTrackedSegment',
    getFormItems: function() {
        return [
            {
                name: "removeOtherSegmentsFromGroup",
                fieldLabel: t('plugin_cmf_actiontriggerrule_addsegment_remove-other-segments-from-group'),
                xtype: "checkbox",
                width: 500,
                labelWidth: 350,
                value: this.options.removeOtherSegmentsFromGroup
            },
            {
                name: "increaseSegmentApplicationCounter",
                fieldLabel: t('plugin_cmf_actiontriggerrule_addsegment_increase-segment-application-counter'),
                xtype: "checkbox",
                width: 500,
                labelWidth: 350,
                value: this.options.increaseSegmentApplicationCounter
            },
            {
                xtype: "checkbox",
                labelWidth: 350,
                width: 500,
                name: "considerProfilingConsent",
                fieldLabel: t("plugin_cmf_actiontriggerrule_consider_profiling_consent"),
                checked: typeof this.options.considerProfilingConsent == 'undefined' ? true : this.options.considerProfilingConsent
            }
        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.actions.AddTargetGroupSegment");
pimcore.plugin.cmf.rule.actions.AddTargetGroupSegment = Class.create(pimcore.plugin.cmf.rule.actions.AbstractAction,{
    name: 'AddTargetGroupSegment',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Action\\AddTargetGroupSegment',
    getFormItems: function() {
        return [
            {
                name: "removeOtherSegmentsFromGroup",
                fieldLabel: t('plugin_cmf_actiontriggerrule_addsegment_remove-other-segments-from-group'),
                xtype: "checkbox",
                width: 500,
                labelWidth: 350,
                value: this.options.removeOtherSegmentsFromGroup
            },
            {
                name: "increaseSegmentApplicationCounter",
                fieldLabel: t('plugin_cmf_actiontriggerrule_addsegment_increase-segment-application-counter'),
                xtype: "checkbox",
                width: 500,
                labelWidth: 350,
                value: this.options.increaseSegmentApplicationCounter
            },
            {
                xtype: "checkbox",
                labelWidth: 350,
                width: 500,
                name: "considerProfilingConsent",
                fieldLabel: t("plugin_cmf_actiontriggerrule_consider_profiling_consent"),
                checked: typeof this.options.considerProfilingConsent == 'undefined' ? true : this.options.considerProfilingConsent
            }
        ];
    }
});

pimcore.registerNS("pimcore.plugin.cmf.rule.actions.SendMail");
pimcore.plugin.cmf.rule.actions.SendMail = Class.create(pimcore.plugin.cmf.rule.actions.AbstractAction,{
    name: 'SendMail',
    implementationClass: '\\CustomerManagementFrameworkBundle\\ActionTrigger\\Action\\SendMail',
    getFormItems: function() {

        return [{
            xtype: 'panel',
            html: '<div style="margin-bottom: 10px; padding: 5px 10px; background-color: #d9edf7; border-color: #bce8f1 !important; color: #31708f;">' + t("plugin_cmf_actiontriggerrule_send_mail_explanation") + '</div>'
        },
            {
                name: "emailDoc",
                fieldLabel: t('emailDoc'),
                xtype: "textfield",
                width: 500,
                cls: "input_drop_target",
                value: this.options.emailDoc,
                listeners: {
                    "render": function (el) {
                        new Ext.dd.DropZone(el.getEl(), {
                            reference: this,
                            ddGroup: "element",
                            getTargetFromEvent: function (e) {
                                return this.getEl();
                            }.bind(el),

                            onNodeOver: function (target, dd, e, data) {


                                data = data.records[0].data;

                                if(data.type != 'email') {
                                    return Ext.dd.DropZone.prototype.dropNotAllowed;
                                }

                                return Ext.dd.DropZone.prototype.dropAllowed;
                            },

                            onNodeDrop: function (target, dd, e, data) {


                                data = data.records[0].data;

                                if(data.type != 'email') {
                                    return false;
                                }

                                this.setValue(data.path);
                                return true;
                            }.bind(el)
                        });
                    }
                }
            },
            {
                xtype: "checkbox",
                labelWidth: 350,
                width: 500,
                name: "toCustomer",
                fieldLabel: t("plugin_cmf_actiontriggerrule_send_to_customer"),
                checked: typeof this.options.toCustomer == 'undefined' ? true : this.options.toCustomer
            },
            {
                xtype: "checkbox",
                labelWidth: 350,
                width: 500,
                name: "considerProfilingConsent",
                fieldLabel: t("plugin_cmf_actiontriggerrule_consider_profiling_consent"),
                checked: typeof this.options.considerProfilingConsent == 'undefined' ? true : this.options.considerProfilingConsent
            }
        ];
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.GDPRDataExtractorBundle.dataproviders.customers");
pimcore.plugin.GDPRDataExtractorBundle.dataproviders.customers = Class.create(pimcore.settings.gdpr.dataproviders.dataObjects, {

    title: t("cmf_gdpr_export_customers"),
    iconCls: "pimcore_icon_customers",
    searchUrl: Routing.generate('_pimcore_customermanagementframework_gdprdata_searchdataobjects'),
    downloadUrl: Routing.generate('_pimcore_customermanagementframework_gdprdata_export', {id: ''})

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.report.custom.definition.termSegmentBuilder");
pimcore.report.custom.definition.termSegmentBuilder = Class.create({

    element: null,
    sourceDefinitionData: null,

    initialize: function (sourceDefinitionData, key, deleteControl, columnSettingsCallback) {
        sourceDefinitionData = sourceDefinitionData ? sourceDefinitionData : {sql: '', termDefinition: 0};

        this.sourceDefinitionData = sourceDefinitionData;

        var time = new Date().getTime();

        this.element = new Ext.form.FormPanel({
            key: key,
            bodyStyle: "padding:10px;",
            autoHeight: true,
            border: false,
            tbar: deleteControl, //this.getDeleteControl("SQL", key),
            items: [
                {
                    xtype: "combo",
                    name: "termDefinition",
                    fieldLabel:t("plugin_cmf_custom_reports_termsegmentbuilder_term_definition"),
                    id: "custom_reports_termSegmentBuilder_" + time + "_termDefinition",
                    typeAhead: true,
                    displayField: 'name',
                    mode: 'local',
                    labelWidth: 200,

                    store: new Ext.data.JsonStore({
                        autoDestroy: true,
                        autoLoad: true,
                        proxy: {
                            type: 'ajax',
                            url: "/admin/customermanagementframework/report/term-segment-builder/get-segment-builder-definitions",
                            reader: {
                                type: 'json',
                                rootProperty: "data",
                                idProperty: "id"
                            }
                        },

                        fields: ["name", "id"],
                        listeners: {
                            load: function () {
                                Ext.getCmp("custom_reports_termSegmentBuilder_" + time + "_termDefinition").setValue(sourceDefinitionData.termDefinition);
                            }.bind(this, time, sourceDefinitionData)
                        }
                    }),
                    valueField: 'id',
                    forceSelection: true,
                    triggerAction: 'all',
                    width: 600,
                    value: sourceDefinitionData.termDefinition,
                    listeners: {
                        change: columnSettingsCallback
                    }

                },
                {
                    xtype: "textarea",
                    name: "sql",
                    fieldLabel: t("plugin_cmf_custom_reports_termsegmentbuilder_sql"),
                    value: (sourceDefinitionData.sql ),
                    width: 700,
                    height: 300,
                    labelWidth: 200,
                    enableKeyEvents: true,
                    listeners: {
                        change: columnSettingsCallback
                    }
                }

            ]
        });
    },

    getElement: function () {
        return this.element;
    },

    getValues: function () {

        var values = this.element.getForm().getFieldValues();

        values.type = "termSegmentBuilder";

        return values;
    }


});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


(function() {
    'use strict';

    pimcore.settings.targeting.actions.register(
        'cmf_track_segment',
        Class.create(pimcore.settings.targeting.action.abstract, {
            getName: function () {
                return t("plugin_cmf_targeting_action_track_segment");
            },

            getPanel: function (panel, data) {
                var id = Ext.id();

                return new Ext.form.FormPanel({
                    id: id,
                    forceLayout: true,
                    border: true,
                    style: "margin: 10px 0 0 0",
                    bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
                    tbar: pimcore.settings.targeting.actions.getTopBar(this, id, panel),
                    items: [
                        {
                            name: "segment",
                            fieldLabel: t('segment'),
                            xtype: "textfield",
                            width: 600,
                            cls: "input_drop_target",
                            value: data.segment,
                            listeners: {
                                "render": function (el) {
                                    new Ext.dd.DropZone(el.getEl(), {
                                        reference: this,
                                        ddGroup: "element",
                                        getTargetFromEvent: function (e) {
                                            return this.getEl();
                                        }.bind(el),

                                        onNodeOver: function (target, dd, e, data) {
                                            data = data.records[0].data;

                                            if (data.type !== 'object') {
                                                return Ext.dd.DropZone.prototype.dropNotAllowed;
                                            }

                                            if (data.className !== 'CustomerSegment') {
                                                return Ext.dd.DropZone.prototype.dropNotAllowed;
                                            }

                                            return Ext.dd.DropZone.prototype.dropAllowed;
                                        },

                                        onNodeDrop: function (target, dd, e, data) {
                                            data = data.records[0].data;

                                            if (data.type !== 'object') {
                                                return false;
                                            }

                                            if (data.className !== 'CustomerSegment') {
                                                return false;
                                            }

                                            this.setValue(data.path);
                                            return true;
                                        }.bind(el)
                                    });
                                }
                            }
                        },
                        {
                            xtype: "hidden",
                            name: "type",
                            value: "cmf_track_segment"
                        }
                    ]
                });
            }
        })
    );

    pimcore.settings.targeting.actions.register(
        "assign_target_group",
        Class.create(pimcore.settings.targeting.action.abstract, {
            getName: function () {
                return t('assign_target_group');
            },

            getPanel: function (panel, data) {
                var id = Ext.id();

                return new Ext.form.FormPanel({
                    id: id,
                    forceLayout: true,
                    border: true,
                    style: "margin: 10px 0 0 0",
                    labelWidth: 200,
                    bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
                    tbar: pimcore.settings.targeting.actions.getTopBar(this, id, panel),
                    items: [
                        {
                            xtype: "combo",
                            fieldLabel: t('target_group'),
                            name: "targetGroup",
                            labelWidth: 200,
                            displayField: 'text',
                            valueField: "id",
                            store: pimcore.globalmanager.get("target_group_store"),
                            editable: false,
                            width: 500,
                            triggerAction: 'all',
                            listWidth: 200,
                            mode: "local",
                            value: data.targetGroup,
                            emptyText: t("select_a_target_group")
                        },
                        {
                            xtype: 'numberfield',
                            fieldLabel: t('assign_target_group_weight'),
                            name: "weight",
                            labelWidth: 200,
                            value: data.weight ? data.weight : 1,
                            width: 300,
                            minValue: 1,
                            allowDecimals: false
                        },
                        {
                            fieldLabel: t("plugin_cmf_targetingaction_assign_segments"),
                            xtype: "combobox",
                            labelWidth: 200,
                            name: "assignSegment",
                            width: 500,
                            store: Ext.data.ArrayStore({
                                fields: ['assignSegment', 'assignSegmentTranslated'],
                                data: [
                                    ['no', t('plugin_cmf_targetingaction_assign_segments_no')],
                                    ['assign_only', t('plugin_cmf_targetingaction_assign_segments_assign_only')],
                                    ['assign_consider_weight', t('plugin_cmf_targetingaction_assign_segments_assign_consider_weight')]
                                ]
                            }),
                            value: data.assignSegment ? data.assignSegment : 'no',
                            displayField: 'assignSegmentTranslated',
                            valueField: 'assignSegment'
                        },
                        {
                            xtype: "checkbox",
                            labelWidth: 200,
                            name: "trackActivity",
                            fieldLabel: t("plugin_cmf_targetingaction_track_activity"),
                            checked: data.trackActivity
                        },
                        {
                            xtype: "checkbox",
                            labelWidth: 200,
                            name: "considerProfilingConsent",
                            fieldLabel: t("plugin_cmf_targetingaction_consider_profiling_consent"),
                            checked: typeof data.considerProfilingConsent == 'undefined' ? true : data.considerProfilingConsent
                        },
                        {
                            xtype: "hidden",
                            name: "type",
                            value: "assign_target_group"
                        }
                    ]
                });
            }
        })
    );


    pimcore.settings.targeting.actions.register(
        "cmf_apply_target_groups_from_segments",
        Class.create(pimcore.settings.targeting.action.abstract, {
            getName: function () {
                return t('plugin_cmf_targeting_action_apply_target_groups_from_segments');
            },

            getPanel: function (panel, data) {
                var id = Ext.id();

                return new Ext.form.FormPanel({
                    id: id,
                    forceLayout: true,
                    border: true,
                    style: "margin: 10px 0 0 0",
                    labelWidth: 50,
                    bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
                    tbar: pimcore.settings.targeting.actions.getTopBar(this, id, panel),
                    items: [
                        {
                            xtype: "fieldcontainer",
                            fieldLabel: t("plugin_cmf_targeting_action_apply_for"),
                            labelWidth: 50,
                            height: 210,
                            layout: {
                                type: 'vbox'
                            },
                            items: [
                                {
                                    xtype: "multiselect",
                                    name: "targetGroup",
                                    displayField: 'text',
                                    valueField: "id",
                                    store: pimcore.globalmanager.get("target_group_store"),
                                    editable: false,
                                    width: 365,
                                    triggerAction: 'all',
                                    height: 180,
                                    mode: "local",
                                    value: data.targetGroup,
                                    emptyText: t("select_a_target_group")
                                },
                                {
                                    xtype: 'panel',
                                    html: t("plugin_cmf_actiontriggerrule_for_condition_empty_all")
                                }
                            ]
                        },
                        {
                            fieldLabel: t("plugin_cmf_targeting_action_apply_do"),
                            xtype: "combobox",
                            labelWidth: 50,
                            name: "applyType",
                            width: 500,
                            store: Ext.data.ArrayStore({
                                fields: ['applyType', 'applyTypeTranslated'],
                                data: [
                                    ['cleanup_and_overwrite', t('plugin_cmf_targeting_action_apply_target_groups_from_segments_cleanup_and_overwrite')],
                                    ['cleanup_and_merge', t('plugin_cmf_targeting_action_apply_target_groups_from_segments_cleanup_and_merge')],
                                    ['only_merge', t('plugin_cmf_targeting_action_apply_target_groups_from_segments_only_merge')]
                                ]
                            }),
                            value: data.applyType ? data.applyType : 'cleanup_and_overwrite',
                            displayField: 'applyTypeTranslated',
                            valueField: 'applyType'
                        },
                        {
                            xtype: "hidden",
                            name: "type",
                            value: "cmf_apply_target_groups_from_segments"
                        }
                    ]
                });
            }
        })
    );

    pimcore.settings.targeting.actions.register(
        "cmf_track_activity",
        Class.create(pimcore.settings.targeting.action.abstract, {
            getName: function () {
                return t('plugin_cmf_targeting_action_track_activity');
            },

            getPanel: function (panel, data) {
                var id = Ext.id();

                return new Ext.form.FormPanel({
                    id: id,
                    forceLayout: true,
                    border: true,
                    style: "margin: 10px 0 0 0",
                    labelWidth: 50,
                    bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
                    tbar: pimcore.settings.targeting.actions.getTopBar(this, id, panel),
                    items: [
                        {
                            fieldLabel: t("plugin_cmf_targeting_activity_type"),
                            xtype: "textfield",
                            labelWidth: 200,
                            name: "activityType",
                            width: 500,
                            value: data.activityType
                        },
                        {
                            xtype: "checkbox",
                            labelWidth: 200,
                            name: "considerProfilingConsent",
                            fieldLabel: t("plugin_cmf_targetingaction_consider_profiling_consent"),
                            checked: typeof data.considerProfilingConsent == 'undefined' ? true : data.considerProfilingConsent
                        },
                        {
                            xtype: "hidden",
                            name: "type",
                            value: "cmf_track_activity"
                        }
                    ]
                });
            }
        })
    );

}());



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


(function() {
    'use strict';

    pimcore.settings.targeting.conditions.register(
        'cmf_has_segment',
        Class.create(pimcore.settings.targeting.condition.abstract, {
            getName: function () {
                return t("plugin_cmf_targeting_condition_has_segment");
            },

            getPanel: function (panel, data) {
                var id = Ext.id();

                var getDataValue = function(key, defaultValue) {
                    if ('undefined' === typeof data[key]) {
                        return defaultValue;
                    }

                    return data[key];
                };

                return new Ext.form.FormPanel({
                    id: id,
                    forceLayout: true,
                    style: "margin: 10px 0 0 0",
                    bodyStyle: "padding: 10px 30px 10px 30px; min-height:40px;",
                    tbar: pimcore.settings.targeting.conditions.getTopBar(this, id, panel, data),
                    items: [
                        {
                            name: "segment",
                            fieldLabel: t('segment'),
                            xtype: "textfield",
                            width: 600,
                            cls: "input_drop_target",
                            value: getDataValue('segment'),
                            listeners: {
                                "render": function (el) {
                                    new Ext.dd.DropZone(el.getEl(), {
                                        reference: this,
                                        ddGroup: "element",
                                        getTargetFromEvent: function (e) {
                                            return this.getEl();
                                        }.bind(el),

                                        onNodeOver: function (target, dd, e, data) {
                                            data = data.records[0].data;

                                            if (data.type !== 'object') {
                                                return Ext.dd.DropZone.prototype.dropNotAllowed;
                                            }

                                            if (data.className !== 'CustomerSegment') {
                                                return Ext.dd.DropZone.prototype.dropNotAllowed;
                                            }

                                            return Ext.dd.DropZone.prototype.dropAllowed;
                                        },

                                        onNodeDrop: function (target, dd, e, data) {
                                            data = data.records[0].data;

                                            if (data.type !== 'object') {
                                                return false;
                                            }

                                            if (data.className !== 'CustomerSegment') {
                                                return false;
                                            }

                                            this.setValue(data.path);
                                            return true;
                                        }.bind(el)
                                    });
                                }
                            }
                        },
                        {
                            name: "considerTrackedSegments",
                            fieldLabel: t("plugin_cmf_consider_tracked_segments"),
                            xtype: "checkbox",
                            checked: getDataValue('considerTrackedSegments', true)
                        },
                        {
                            name: "considerCustomerSegments",
                            fieldLabel: t("plugin_cmf_consider_customer_segments"),
                            xtype: "checkbox",
                            checked: getDataValue('considerCustomerSegments', true)
                        },
                        {
                            xtype: "fieldcontainer",
                            fieldLabel: t("plugin_cmf_actiontriggerrule_number_condition"),
                            layout: {
                                type: 'table',
                                tdAttrs: {
                                    valign: 'center',
                                    align: 'left'
                                }
                            },
                            items: [
                                {
                                    xtype: "combobox",
                                    name: "condition_operator",
                                    width: 270,
                                    store: Ext.data.ArrayStore({
                                        fields: ['condition_operator', 'label'],
                                        data: [
                                            ['%', t('plugin_cmf_actiontriggerrule_number_condition_%')],
                                            ['=', t('plugin_cmf_actiontriggerrule_number_condition_=')],
                                            ['<', t('plugin_cmf_actiontriggerrule_number_condition_<')],
                                            ['<=', t('plugin_cmf_actiontriggerrule_number_condition_<=')],
                                            ['>', t('plugin_cmf_actiontriggerrule_number_condition_>')],
                                            ['>=', t('plugin_cmf_actiontriggerrule_number_condition_>=')]
                                        ]
                                    }),
                                    value: getDataValue('condition_operator', '>='),
                                    displayField: 'label',
                                    valueField: 'condition_operator'
                                },
                                {
                                    xtype: 'numberfield',
                                    name: "value",
                                    value: getDataValue('value', 1),
                                    width: 160,
                                    minValue: 1,
                                    allowDecimals: false
                                }
                            ]
                        },
                        {
                            xtype: "hidden",
                            name: "type",
                            value: "cmf_has_segment"
                        }
                    ]
                });
            }
        })
    );


    pimcore.settings.targeting.conditions.register(
        'cmf_customer_is_loggedin',
        Class.create(pimcore.settings.targeting.condition.abstract, {
            getName: function () {
                return t("plugin_cmf_targeting_condition_customer_is_loggedin");
            },

            getPanel: function (panel, data) {
                var id = Ext.id();

                return new Ext.form.FormPanel({
                    id: id,
                    forceLayout: true,
                    height: 110,
                    style: "margin: 10px 0 0 0",
                    bodyStyle: "padding: 10px 30px 10px 30px; height:80px;",
                    tbar: pimcore.settings.targeting.conditions.getTopBar(this, id, panel, data),
                    items: [
                        {
                            xtype: "hidden",
                            name: "type",
                            value: "cmf_customer_is_loggedin"
                        }
                    ]
                });
            }
        })
    );

    pimcore.settings.targeting.conditions.register(
        'cmf_customer_segments_have_changed',
        Class.create(pimcore.settings.targeting.condition.abstract, {
            getName: function () {
                return t("plugin_cmf_targeting_condition_customer_segments_have_changed");
            },

            getPanel: function (panel, data) {
                var id = Ext.id();

                return new Ext.form.FormPanel({
                    id: id,
                    forceLayout: true,
                    height: 110,
                    style: "margin: 10px 0 0 0",
                    bodyStyle: "padding: 10px 30px 10px 30px; height:80px;",
                    tbar: pimcore.settings.targeting.conditions.getTopBar(this, id, panel, data),
                    items: [
                        {
                            xtype: "hidden",
                            name: "type",
                            value: "cmf_customer_segments_have_changed"
                        }
                    ]
                });
            }
        })
    );


}());



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.document.newsletters.addressSourceAdapters.SegmentAddressSource");
pimcore.document.newsletters.addressSourceAdapters.SegmentAddressSource = Class.create({
    initialize: function (document, data) {
        this.document = document;
        this.layout = this.commitCrimesAgainstNature();
    },
    getName: function () {
        return "SegmentAddressSource";
    },
    getLayout: function () {
        return this.layout;
    },
    getValues: function () {
        return {
            segmentIds: this.segmentStore.getData().items.map(item => item.id),
            operator: this.operatorsBox.getValue(),
            filterFlags: this.filterFlags.getValue()
        };
    },

    commitCrimesAgainstNature: function () {
        this.segmentStore = new Ext.data.Store({
            autoDestroy: true,
            fields: ['id', 'name']
        });

        this.operatorsStore = new Ext.data.Store({
            fields: ['name'],
            data : [
                {'name': t('cmf_newsletter_or'), 'val' : 'or'},
                {'name': t('cmf_newsletter_and'), 'val' : 'and'}
            ]
        });

        var segmentGrid = Ext.create('Ext.grid.Panel', {
            minHeight: 90,
            height:200,
            border: true,
            cls: 'object_field',
            tbar: {
                items: [
                    Ext.create('Ext.toolbar.Spacer', {
                        width: 20,
                        height: 16,
                        cls: "pimcore_icon_droptarget"
                    }),
                    {
                        xtype: "tbtext",
                        text: "<b>" + t('cmf_newsletter_selectedSegments') + "</b>"
                    },
                    "->",
                    {
                        xtype: "button",
                        iconCls: "pimcore_icon_search",
                        handler: this.openSearchEditor.bind(this)
                    }
                ],
                ctCls: "pimcore_force_auto_width",
                cls: "pimcore_force_auto_width"
            },
            bodyCssClass: "pimcore_object_tag_objects",
            store: this.segmentStore,

            columns: [
                {header: 'Id', sortable: false, dataIndex: 'id', flex: 1},
                {header: 'Name', sortable: false, dataIndex: 'name', flex: 3},
                {
                    header: t('remove'),
                    xtype: 'actioncolumn',
                    flex: 1,
                    items: [{
                        tooltip: t('remove'),
                        icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                        handler: function (grid, rowIndex) {
                            grid.getStore().removeAt(rowIndex);
                        }.bind(this)
                    }]
                }
            ],
            stripeRows: true
        });

        segmentGrid.on("rowclick", function (grid, record, tr, rowIndex, e, eOpts) {
            var data = grid.getStore().getAt(rowIndex);

            pimcore.helpers.openObject(data.data.id, data.data.type);
        });

        segmentGrid.on("afterrender", function () {

            var dropTargetEl = segmentGrid.getEl();
            var gridDropTarget = new Ext.dd.DropZone(dropTargetEl, {
                ddGroup: 'element',

                getTargetFromEvent: function (e) {
                    return segmentGrid.getEl().dom;
                }.bind(this),

                onNodeOver: function (overHtmlNode, ddSource, e, data) {
                    data = data.records[0].data;
                    var fromTree = this.isFromTree(ddSource);

                    if (this.dndAllowed(data, fromTree)) {
                        return Ext.dd.DropZone.prototype.dropAllowed;
                    } else {
                        return Ext.dd.DropZone.prototype.dropNotAllowed;
                    }
                }.bind(this),

                onNodeDrop: function (target, dd, event, data) {
                    var element = data.records[0].data;
                    var fromTree = this.isFromTree(dd);

                    if (this.dndAllowed(element, fromTree)) {
                        this.segmentStore.add({id: element.id, name: element.text, type: element.elementType});
                        return true;
                    }

                    return false;
                }.bind(this)
            });
        }.bind(this));

        this.operatorsBox = Ext.create('Ext.form.ComboBox', {
            fieldLabel: t('cmf_newsletter_operators'),
            store: this.operatorsStore,
            queryMode: 'local',
            displayField: 'name',
            valueField: 'val',
            width: 400,
            style: "padding-top:30px",
            value: this.operatorsStore.first(),
        });

        this.filterFlags = Ext.create('Ext.ux.form.MultiSelect', {
            name: 'filterFlags',
            triggerAction: "all",
            editable: false,
            fieldLabel: t('cmf_newsletter_filter_flags'),
            store: new Ext.data.Store({
                autoDestroy: true,
                proxy: {
                    type: 'ajax',
                    url: "/admin/customermanagementframework/helper/newsletter/possible-filter-flags",
                    reader: {
                        type: 'json',
                        rootProperty: 'data'
                    }
                },
                autoLoad: true,
                fields: ["name", "label"]
            }),
            valueField: 'name',
            displayField: 'label',
            width: 400,
            height: 110
        });

        var form = Ext.create('Ext.form.Panel', {
            height: 400,
            items: [
                segmentGrid,
                this.operatorsBox,
                this.filterFlags
            ]
        });

        return form;
    },

    isFromTree: function (ddSource) {
        return 'Ext.tree.ViewDragZone' === Ext.getClass(ddSource).getName();
    },

    dndAllowed: function (data, fromTree) {
        return 'object' === data.elementType && 'CustomerSegment' === data.className;
    },

    openSearchEditor: function () {
        pimcore.helpers.itemselector(true, this.addDataFromSelector.bind(this), {
            type: ['object'],
            subtype: ['object'],
            specific: {
                classes: ['CustomerSegment']
            }
        });
    },

    addDataFromSelector: function (items) {
        if (items.length === 1 && 'undefined' === typeof items[0]) {
            return;
        }

        items.forEach(function (item, index, array) {
            if (!this.segmentStore.getById(item.id)) {
                this.segmentStore.add({
                    id: item.id,
                    name: item.filename,
                    type: item.type
                });
            }
        }, this);

    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS('pimcore.plugin.customermanagementframework.webserviceConfigurationView');
pimcore.plugin.customermanagementframework.webserviceConfigurationView = Class.create({

    layoutId: '',

    initialize: function(layoutId) {
        this.layoutId = layoutId;

        const tabPanel = Ext.getCmp('pimcore_panel_tabs');
        tabPanel.add(this.getLayout());
        this.activate();

        this.layout.on('destroy', function () {
            pimcore.globalmanager.remove(this.layoutId);
        }.bind(this));

    },

    loadComplete: function(transport) {
        const response = Ext.decode(transport.responseText);

        if(response && response.success) {
            this.data = response.data;

            this.getLayout();
            const tabPanel = Ext.getCmp('pimcore_panel_tabs');
            tabPanel.add(this.layout);
            pimcore.globalmanager.get(this.layoutId).activate();

            this.layout.on("destroy", function () {
                pimcore.globalmanager.remove(this.layoutId);
            }.bind(this));
        }
    },


    getLayout: function() {
        if (this.layout == null) {

            this.layout = new Ext.Panel({
                title: t('plugin_cmf_webserviceConfigurationView'),
                id: this.layoutId,
                border: false,
                'layout': 'fit',
                iconCls: 'pimcore_nav_icon_webservice_settings',
                closable: true,
                items: [this.getGrid()]
            });

        }
        return this.layout;
    },

    getGrid: function () {

        const itemsPerPage = pimcore.helpers.grid.getDefaultPageSize();
        const store = pimcore.helpers.grid.buildDefaultStore(
            Routing.generate('_pimcore_customermanagementframework_backend_settings_webservice_users'),
            [
                'id', 'name', 'firstname', 'lastname', 'email', 'apiKey', 'image'
            ],
            itemsPerPage
        );

        let filterField = Ext.create('Ext.form.TextField', {
            width: 200,
            style: 'margin: 0 10px 0 0;',
            enableKeyEvents: true,
            listeners: {
                'keydown' : function (store, field, key) {
                    if (key.getKey() == key.ENTER) {
                        var input = field;
                        var proxy = store.getProxy();
                        proxy.extraParams.filter = input.getValue();
                        store.load();
                    }
                }.bind(this, store)
            }
        });

        pagingtoolbar = pimcore.helpers.grid.buildDefaultPagingToolbar(store);

        const typesColumns = [
            {text: t('id'), width: 40, sortable: true, dataIndex: 'id'},
            {text: t('image'), width: 85, sortable: false, dataIndex: 'image', renderer: function(value) {
                return '<img src="' + value + '" style="width:60px; height:60px;"  />';
            }},
            {text: t('username'), flex: 200, sortable: true, dataIndex: 'name'},
            {text: t('firstname'), flex: 200, sortable: true, dataIndex: 'firstname'},
            {text: t('lastname'), flex: 200, sortable: true, dataIndex: 'lastname'},
            {text: t('email'), flex: 200, sortable: true, dataIndex: 'email'},
            {text: t('plugin_cmf_webserviceConfigurationView_key'), flex: 200, sortable: false, dataIndex: 'apiKey', editor: new Ext.form.TextField({})},
            {
                xtype: 'actioncolumn',
                width: 35,
                items: [{
                    tooltip: t('plugin_cmf_webserviceConfigurationView_generate'),
                    iconCls: 'pimcore_icon_clear_cache',
                    handler: function (view, rowIndex, colIndex, item, e, record) {
                        record.set('apiKey', md5(uniqid()) + md5(uniqid()));
                    }.bind(this)
                }]
            },
            {
                xtype: 'actioncolumn',
                width: 35,
                items: [{
                    tooltip: t('plugin_cmf_webserviceConfigurationView_copy'),
                    iconCls: 'pimcore_icon_copy',
                    handler: function (view, rowIndex, colIndex, item, e, record) {
                        pimcore.helpers.copyStringToClipboard(record.get('apiKey'));
                    }.bind(this)
                }]
            }
        ];

        const cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });

        const toolbar = Ext.create('Ext.Toolbar', {
            cls: 'pimcore_main_toolbar',
            items: [
                {
                    text: t("filter") + "/" + t("search"),
                    xtype: "tbtext",
                    style: "margin: 0 10px 0 0;"
                },
                filterField
            ]
        });

        const grid = Ext.create('Ext.grid.Panel', {
            autoScroll: true,
            store: store,
            columns: {
                items: typesColumns,
                defaults: {
                    renderer: Ext.util.Format.htmlEncode
                },
            },
            selModel: Ext.create('Ext.selection.RowModel', {}),
            plugins: [
                cellEditing
            ],
            trackMouseOver: true,
            columnLines: true,
            bbar: pagingtoolbar,
            bodyCls: "pimcore_editable_grid",
            stripeRows: true,
            tbar: toolbar,
            viewConfig: {
                forceFit: true,
            }
        });

        store.load();

        return grid;
    },

    activate: function () {
        Ext.getCmp("pimcore_panel_tabs").setActiveItem(this.layoutId);
    }

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.Bundle");

pimcore.bundle.outputDataConfigToolkit.Bundle = Class.create(pimcore.plugin.admin, {

    getClassName: function () {
        return "pimcore.bundle.outputDataConfigToolkit.Bundle";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },


    uninstall: function() {
        
    },

    postOpenObject: function (object, type) {
        if (pimcore.globalmanager.get("user").isAllowed("bundle_outputDataConfigToolkit")) {
            Ext.Ajax.request({
                url: "/admin/outputdataconfig/admin/initialize",
                params: {
                    id: object.id
                }
            })
                .then(function (res) {
                    var data = JSON.parse(res.responseText);

                    if (!data.success || data.object === false) {
                        return;
                    }

                    var objectData = object;
                    if (data.object.id) {
                        objectData = data.object;
                    }

                    var configTab = new pimcore.bundle.outputDataConfigToolkit.Tab(objectData, type);
                    var objectTabPanel = object.tab.items.items[1];

                    objectTabPanel.insert(objectTabPanel.items.length, configTab.getLayout());
                    pimcore.layout.refresh();

                }.bind(this));
        }
    }
});

new pimcore.bundle.outputDataConfigToolkit.Bundle();



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.Tab");

pimcore.bundle.outputDataConfigToolkit.Tab = Class.create({

    initialize: function(object, type) {
        this.object = object;
        this.type = type;
    },

    load: function () {
    },

    getLayout: function () {
        if (this.layout == null) {
            var classStore = pimcore.globalmanager.get("object_types_store");
            var toolbarConfig = [new Ext.Toolbar.TextItem({
                text: t("please_select_a_type")
            }),new Ext.form.ComboBox({
                name: "selectClass",
                store: classStore,
                valueField: 'id',
                displayField: 'translatedText',
                triggerAction: 'all',
                listeners: {
                    "select": function(field, newValue, oldValue) {
                        this.store.load({params: {"class_id": newValue.data.id}});
                    }.bind(this)
                }
            }),{
                xtype: 'button',
                text: t('reload'),
                handler: function () {
                    this.store.reload();
                }.bind(this),
                iconCls: "pimcore_icon_reload"
            }];


            this.layout = new Ext.Panel({
                border: false,
                layout: "fit",
                iconCls: "bundle_outputdataconfig_icon_material pimcore_material_icon",
                tbar: toolbarConfig,
                listeners: {
                    afterrender: function(){
                        this.layout.insert(this.layout.items.length, this.getGrid());
                    }.bind(this)
                }
            });
        }
        return this.layout;

    },

    getGrid: function() {

        var itemsPerPage = 100000000;
        this.store = pimcore.helpers.grid.buildDefaultStore(
            '/admin/outputdataconfig/admin/get-output-configs?',
            [
                {name: 'id'},
                {name: 'classname'},
                {name: 'object_id'},
                {name: 'channel', type: 'string'},
                {name: 'is_inherited'}
            ],
            itemsPerPage
        );
        var proxy = this.store.getProxy();
        proxy.extraParams.object_id = this.object.id;
        this.store.setGroupField('classname');
        this.store.setGroupDir('ASC');

        var columns = [
            {header: t('class'), flex: 20, dataIndex: 'classname', sortable: false},
            {header: t('channel'), flex: 30, dataIndex: 'channel', sortable: false},
            {header: t('objectid'), flex: 10, dataIndex: 'object_id', sortable: false, renderer: function (value, metaData, record) {
                if(record.data.is_inherited == true) {
                    metaData.css += " grid_value_inherited";
                }
                return value;}
            }
        ];

        columns.push({
            header: t('overwrite/edit'),
            xtype: 'actioncolumn',
            width: 60,
            items: [
                {
                    tooltip: t('overwrite/edit'),
                    icon: "/bundles/pimcoreadmin/img/flat-color-icons/edit.svg",
                    handler: function (grid, rowIndex, colIndex, item, e, record, row) {
                        this.openConfigDialog(record.id);
                    }.bind(this)
                }
            ]
        });
        columns.push({
            header: t('reset'),
            xtype: 'actioncolumn',
            width: 60,
            items: [
                {
                    tooltip: t('reset'),
                    icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                    getClass: function(v, meta, rec) {  // Or return a class from a function
                        if(rec.get('is_inherited') || this.object.id == 1) {
                            return "pimcore_hidden";
                        }
                    }.bind(this),
                    handler: function (grid, rowIndex, colIndex, item, event, record) {
                        Ext.MessageBox.confirm(t('reset_outputdataconfig'), t('reset_outputdataconfig_text'), this.resetOutputDataConfig.bind(this, record.data.id), this);
                    }.bind(this)
                }
            ]
        });


        this.configGrid = Ext.create('Ext.grid.Panel', {
            frame: false,
            autoScroll: true,
            store: this.store,
            columns : columns,
            trackMouseOver: true,
            columnLines: true,
            bodyCls: "pimcore_editable_grid",
            selModel: Ext.create('Ext.selection.RowModel', {}),
            stripeRows: true,
            features: [{
                id: 'group',
                ftype: 'grouping',
                groupHeaderTpl: '{name}',
                hideGroupedHeader: true,
                enableGroupingMenu: false,
                enableNoGroups:false,
                startCollapsed: true
            }],
            viewConfig: {
                forceFit: true
            }
        });

        return this.configGrid;
    },

    resetOutputDataConfig: function(configId, answer) {
        if(answer != "no") {
            Ext.Ajax.request({
                url: '/admin/outputdataconfig/admin/reset-output-config',
                params: {
                    config_id: configId
                },
                success: function(response) {
                    var data = Ext.decode(response.responseText);

                    if(data.success) {
                        this.store.reload();
                    } else {
                        pimcore.helpers.showNotification(t("error"), t("error_reseting_output_config"), "error", t(data.message));
                    }
                }.bind(this)
            });
        }
    },

    openConfigDialog: function(configId) {
        Ext.Ajax.request({
            url: '/admin/outputdataconfig/admin/get-output-config',
            params: {
                config_id: configId
            },
            success: function(response) {
                var data = Ext.decode(response.responseText);

                if(data.success) {
                    var dialog = new pimcore.bundle.outputDataConfigToolkit.OutputDataConfigDialog(data.outputConfig, this.saveConfigDialog.bind(this), null, this.object.id);
                } else {
                    pimcore.helpers.showNotification(t("error"), t("error_opening_output_config"), "error", t(data.message));
                }
            }.bind(this)
        });

    },

    saveConfigDialog: function(data) {
        Ext.Ajax.request({
            url: '/admin/outputdataconfig/admin/save-output-config',
            method: 'POST',
            params: {
                config_id: data.id,
                object_id: this.object.id,
                config: Ext.encode(data.config)
            },
            success: function(response) {
                var data = Ext.decode(response.responseText);

                if(data.success) {
                    pimcore.helpers.showNotification(t("success"), t("output_config_saved"), "success");
                    this.store.reload();
                } else {
                    pimcore.helpers.showNotification(t("error"), t("error_saving_output_config"), "error", t(data.message));
                }
            }.bind(this)
        });
    }

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.OutputDataConfigDialog");
pimcore.bundle.outputDataConfigToolkit.OutputDataConfigDialog = Class.create(pimcore.object.helpers.gridConfigDialog, {

    data: {},
    brickKeys: [],
    availableOperators: null,

    initialize: function (outputConfig, callback, availableOperators, targetObjectId) {

        if(pimcore.settings === undefined) {
            pimcore.settings = { debug_admin_translations: false };
        }

        this.targetObjectId = targetObjectId;
        this.outputConfig = outputConfig;
        this.callback = callback;
        if(availableOperators) {
            this.availableOperators = availableOperators;
        }

        if(!this.callback) {
            this.callback = function () {};
        }

        this.configPanel = new Ext.Panel({
            layout: "border",
            items: [this.getSelectionPanel(), this.getLeftPanel()]

        });

        this.window = new Ext.Window({
            width: 850,
            height: 650,
            modal: true,
            iconCls: "bundle_outputdataconfig_icon",
            title: t('output_channel_definition_for') + " " + t(this.outputConfig.channel),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
    },


    commitData: function () {
        var data = this.getData();
        this.callback(data);
        this.window.close();
    },

    getData: function () {
        var config = this.doGetRecursiveData(this.selectionPanel.getRootNode());

        this.data = {
            id: this.outputConfig.id,
            config: config
        };
        return this.data;
    },

    doGetRecursiveData: function(node) {
        var childs = [];
        node.eachChild(function(child) {
            var attributes = child.data.configAttributes;
            attributes.childs = this.doGetRecursiveData(child);
            childs.push(attributes);
        }.bind(this));

        return childs;
    },

    expandChildren: function(rootNode) {
        for(var i = 0; i < rootNode.childNodes.length; i++) {
            var child = rootNode.childNodes[i];
            if(child.data.expanded) {
                child.expand();

                if(child.childNodes && child.childNodes.length) {
                    this.expandChildren(child);
                }
            }
        }
    },

    getSelectionPanel: function () {
        if(!this.selectionPanel) {
            var childs = this.doBuildChannelConfigTree(this.outputConfig.configuration);

            var filterField = new Ext.form.field.Text(
                {
                    width: 300,
                    hideLabel: true,
                    enableKeyEvents: true
                }
            );

            var filterButton = new Ext.button.Button({
                iconCls: "pimcore_icon_search"
            });

            var headerConfig = {
                title: t('class_attributes'),
                items: [
                    filterField,
                    filterButton
                ]
            };


            this.selectionPanel = new Ext.tree.TreePanel({
                root: {
                    id: "0",
                    root: true,
                    text: t("output_channel_definition"),
                    leaf: false,
                    isTarget: true,
                    expanded: true,
                    children: childs
                },
                region:'east',
                tbar: headerConfig,

                title: t('output_channel_definition'),
                layout:'fit',
                width: 428,
                split:true,
                autoScroll:true,
                rootVisible: false,
                viewConfig: {
                    plugins: {
                        ptype: 'treeviewdragdrop',
                        ddGroup: "columnconfigelement",
                        allowContainerDrops: true
                    },
                    listeners: {
                        options: {
                            target: this.selectionPanel
                        },
                        beforedrop: function (node, data, overModel, dropPosition, dropHandlers, eOpts) {
                            var target = overModel.getOwnerTree().getView();
                            var source = data.view;

                            if (source != target) {
                                var record = data.records[0];

                                var attr = record.data;
                                if (record.data.configAttributes) {
                                    attr = record.data.configAttributes;
                                }
                                var element = this.getConfigElement(attr);
                                var copy = element.getCopyNode(record);
                                data.records = [copy]; // assign the copy as the new dropNode
                                var window = element.getConfigDialog(copy);

                                if(window) {
                                    //this is needed because of new focus management of extjs6
                                    setTimeout(function() {
                                        window.focus();
                                    }, 250);
                                }
                            }
                        }.bind(this),
                        drop: function(node, data, overModel) {
                            overModel.set('expandable', true);

                        }.bind(this),
                        nodedragover: function (targetNode, position, dragData, e, eOpts ) {
                            var sourceNode = dragData.records[0];

                            var sourceType = this.getNodeTypeAndClass(sourceNode);
                            var targetType = this.getNodeTypeAndClass(targetNode);
                            var allowed = false;

                            //check allowed Parents
                            if (sourceNode.data.allowedParents) {
                                if (position == "append" && sourceNode.data.allowedParents[targetType.type] && sourceNode.data.allowedParents[targetType.type][targetType.className] == true) {
                                    allowed = true;
                                }
                            }

                            //check allowed Types
                            if (targetNode.data.allowedTypes) {
                                if (position == "append" && targetNode.data.allowedTypes[sourceType.type] && targetNode.data.allowedTypes[sourceType.type][sourceType.className] == true) {
                                    allowed = true;
                                }
                            }

                            //if nothing is set --> true
                            if (!sourceNode.data.allowedParents && !targetNode.data.allowedTypes) {
                                allowed = true;
                            }

                            //check count
                            if (targetNode.data.maxChildCount && targetNode.childNodes.length >= targetNode.data.maxChildCount && position == 'append') {
                                allowed = false;
                            }
                            if (targetNode.parentNode && targetNode.parentNode.data.maxChildCount && targetNode.parentNode.childNodes.length >= targetNode.parentNode.data.maxChildCount) {
                                allowed = false;
                            }

                            return allowed;


                        }.bind(this)
                    }
                },
                listeners: {

                    afterrender: function (tree) {

                        //initialise search filter
                        var classTreeHelper = new pimcore.object.helpers.classTree(true);
                        classTreeHelper.updateFilter(tree, filterField);

                        filterField.on("keyup", classTreeHelper.updateFilter.bind(tree, tree, filterField));
                        filterButton.on("click", classTreeHelper.updateFilter.bind(tree, tree, filterField));

                    },
                    afterlayout: function (tree) {
                        this.expandChildren(tree.getRootNode());
                    }.bind(this),
                    itemcontextmenu: function (tree, record, item, index, e, eOpts) {
                        e.stopEvent();

                        tree.select();

                        var menu = new Ext.menu.Menu();

                        if (this.id != 0) {
                            menu.add(new Ext.menu.Item({
                                text: t('delete'),
                                iconCls: "pimcore_icon_delete",
                                handler: function (node) {
                                    if(node.parentNode.childNodes.length == 1) {
                                        node.parentNode.set('expandable', false);
                                    }
                                    node.parentNode.removeChild(node, true);
                                }.bind(this, record)
                            }));
                            menu.add(new Ext.menu.Item({
                                text: t('edit'),
                                iconCls: "pimcore_icon_edit",
                                handler: function (node) {
                                    this.getConfigElement(node.data.configAttributes).getConfigDialog(node);
                                }.bind(this, record)
                            }));
                        }

                        menu.showAt(e.pageX, e.pageY);
                    }.bind(this)
                },
                buttons: [{
                    text: t("apply"),
                    iconCls: "pimcore_icon_apply",
                    handler: function () {
                        this.commitData();
                    }.bind(this)
                }]
            });

        }

        return this.selectionPanel;
    },

    doBuildChannelConfigTree: function(configuration) {
        var elements = [];
        if(configuration) {
            for(var i = 0; i < configuration.length; i++) {
                var treenode = this.getConfigElement(configuration[i]).getConfigTreeNode(configuration[i]);

                if(configuration[i].childs) {
                    var childs = this.doBuildChannelConfigTree(configuration[i].childs);
                    treenode.children = childs;
                    if(childs.length > 0) {
                        treenode.expandable = true;
                    }
                }
                if (configuration[i].icon != null && configuration[i].icon.length > 0) {
                    treenode.iconCls = null;
                    treenode.icon = configuration[i].icon;
                }

                elements.push(treenode);
            }
        }
        return elements;
    },

    getConfigElement: function(configAttributes) {
        var element = null;
        if(configAttributes && configAttributes.class && configAttributes.type) {
            element = new pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements[configAttributes.type][configAttributes.class](this.outputConfig.o_classId);
        } else {
            var dataType = configAttributes.dataType.charAt(0).toUpperCase() + configAttributes.dataType.slice(1);
            if(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value[dataType]) {
                element = new pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value[dataType](this.outputConfig.o_classId);
            } else {
                element = new pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DefaultValue(this.outputConfig.o_classId);
            }
        }
        return element;
    },

    getNodeTypeAndClass: function(node) {
        var type = "value";
        var className = "";
        if(node.data.configAttributes) {
            type = node.data.configAttributes.type;
            className = node.data.configAttributes['class'];
        } else if(node.data.dataType) {
            className = node.data.dataType.charAt(0).toUpperCase() + node.data.dataType.slice(1);
        }
        return {type: type, className: className};
    },

    getLeftPanel: function () {
        if (!this.leftPanel) {

            var items = [
                this.getClassTree("/admin/outputdataconfig/get-class-definition-for-column-config", this.outputConfig.o_classId, this.targetObjectId),
                this.getOperatorTree()
            ];

            this.brickKeys = [];
            this.leftPanel = new Ext.Panel({
                layout: "border",
                region: "center",
                items: items
            });
        }

        return this.leftPanel;
    },

    getClassTree: function(url, id,  target_oid) {

        var classTreeHelper = new pimcore.bundle.outputDataConfigToolkit.ClassTree(false);
        var tree = classTreeHelper.getClassTree(url, id, null, target_oid);

        tree.addListener("itemdblclick", function( tree, record, item, index, e, eOpts ) {

            if(!record.data.root && record.data.type != "layout" && record.data.dataType != 'localizedfields') {
                var attr = record.data;
                if(record.data.configAttributes) {
                    attr = record.data.configAttributes;
                }
                var element = this.getConfigElement(attr);
                var copy = element.getCopyNode(record);
                element.getConfigDialog(copy);

                if(this.selectionPanel) {
                    this.selectionPanel.getRootNode().appendChild(copy);
                }
            }
        }.bind(this));

        tree.addListener("itemcontextmenu", function (tree, record, item, index, e) {
            if (record.data.depth === 1 && record.data.nodeType == "classificationstore") {
                var menu = new Ext.menu.Menu({
                    items: [{
                        text: t("add_all"),
                        iconCls: "pimcore_icon_add",
                        handler: function (item, e) {
                            Ext.Array.forEach(record.childNodes, function (record) {
                                var attr = record.data;
                                if(record.data.configAttributes) {
                                    attr = record.data.configAttributes;
                                }
                                var element = this.getConfigElement(attr);
                                var copy = element.getCopyNode(record);
                                copy.data.configAttributes.icon = null;
                                this.selectionPanel.getRootNode().appendChild(copy);
                            }, this);
                        }.bind(this),
                    }]
                });
                menu.showAt(e.getXY());
                e.stopEvent();
            }

        }.bind(this));

        return tree;
    },

    getOperatorTree: function() {
        var operators = Object.keys(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator);
        var childs = [];
        for(var i = 0; i < operators.length; i++) {
            if(!this.availableOperators || this.availableOperators.indexOf(operators[i]) >= 0) {
                childs.push(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator[operators[i]].prototype.getConfigTreeNode());
            }
        }

        var tree = new Ext.tree.TreePanel({
            title: t('operators'),
            xtype: "treepanel",
            region: "south",
            autoScroll: true,
            height: 200,
            rootVisible: false,
            viewConfig: {
                plugins: {
                    ptype: 'treeviewdragdrop',
                    ddGroup: "columnconfigelement",
                    allowDrop: false,
                    allowDrag: true
                }
            },
            root: {
                id: "0",
                root: true,
                text: t("base"),
                draggable: false,
                leaf: false,
                isTarget: false,
                children: childs
            }
        });

        return tree;
    }

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.ClassTree");
pimcore.bundle.outputDataConfigToolkit.ClassTree = Class.create(pimcore.object.helpers.classTree, {

    initLayoutFields: function (tree, response) {
        var data = Ext.decode(response.responseText);

        var keys = Object.keys(data);
        for (var i = 0; i < keys.length; i++) {
            if (data[keys[i]]) {
                if (data[keys[i]].childs) {
                    var nodeData = data[keys[i]],
                        text = t(nodeData.nodeLabel),
                        brickDescriptor = {},
                        classificationDescriptor = {},
                        nodeType = nodeData.nodeType;

                    if (nodeType == "objectbricks") {
                        brickDescriptor = {
                            insideBrick: true,
                            brickType: nodeData.nodeLabel,
                            brickField: nodeData.brickField
                        };

                        text = t(nodeData.nodeLabel) + " " + t("columns");

                    }

                    var baseNode = {
                        nodeType: nodeType,
                        type: "layout",
                        allowDrag: false,
                        iconCls: "pimcore_icon_" + nodeType,
                        text: text
                    };

                    baseNode = tree.getRootNode().appendChild(baseNode);
                    for (var j = 0; j < data[keys[i]].childs.length; j++) {
                        var newChild = data[keys[i]].childs[j];

                        if (nodeType === "classificationstore") {
                            classificationDescriptor = {
                                keyConfig: {
                                    id: newChild.id,
                                    name: newChild.name,
                                }
                            };
                            newChild = newChild.definition;
                        }

                        baseNode.appendChild(this.recursiveAddNode(newChild, baseNode, brickDescriptor, classificationDescriptor));
                    }
                    if (nodeType == "object") {
                        baseNode.expand();
                    } else {
                        // baseNode.collapse();
                    }
                }
            }
        }
    },

    recursiveAddNode: function (con, scope, brickDescriptor, classificationDescriptor) {

        var fn = null;
        var newNode = null;

        if (con.datatype == "layout" || con.fieldtype == "classificationstore") {
            fn = this.addLayoutChild.bind(scope, con.fieldtype, con, this);
        } else if (con.datatype == "data") {
            fn = this.addDataChild.bind(scope, con.fieldtype, con, this.showFieldName, brickDescriptor, classificationDescriptor);
        }

        newNode = fn();

        if (con.childs) {
            for (var i = 0; i < con.childs.length; i++) {
                this.recursiveAddNode(con.childs[i], newNode, brickDescriptor);
            }
        }

        return newNode;
    },

    addLayoutChild: function (type, initData, clazz) {
        var nodeLabel = t(type);

        if (initData) {
            if (initData.title) {
                nodeLabel = initData.title;
            } else if (initData.name) {
                nodeLabel = initData.name;
            }
        }

        var children = [];
        if (type == "classificationstore") {
            children = typeof initData.activeGroupDefinitions == "object"
                ? Object.values(initData.activeGroupDefinitions)
                : [];
        } else {
            children = initData.childs;
        }

        var newNode = {
            type: "layout",
            expanded: true,
            expandable: children.length,
            allowDrag: false,
            iconCls: "pimcore_icon_" + type,
            text: nodeLabel
        };

        newNode = this.appendChild(newNode);

        this.expand();

        if (type === "classificationstore") {
            for (var groupId in initData.activeGroupDefinitions) {
                var activeGroupDefinition = initData.activeGroupDefinitions[groupId];

                var groupNode = clazz.addLayoutChild.call(newNode, "keys", {
                    title: activeGroupDefinition.name + " (" + groupId + ")",
                    childs: activeGroupDefinition.keys
                }, clazz);

                Ext.Array.forEach(activeGroupDefinition.keys, function (keyData) {
                    keyData.definition.title = keyData.name;
                    var classificationDescriptor = {
                        keyConfig: {
                            id: keyData.id,
                            name: keyData.name,
                            // description: keyData.description
                        }
                    };
                    clazz.addDataChild.call(groupNode, keyData.definition.fieldtype, keyData.definition, clazz.showFieldName, {}, classificationDescriptor);
                }, this);
            }
        }

        return newNode;
    },

    addDataChild: function (type, initData, showFieldname, brickDescriptor, classificationDescriptor) {

        if (type != "objectbricks" && !initData.invisible) {
            var isLeaf = true;
            var draggable = true;

            // localizedfields can be a drop target
            if (type == "localizedfields") {

                isLeaf = false;
                draggable = false;

                Ext.apply(brickDescriptor, {
                    insideLocalizedFields: true
                });

            }

            var key = initData.name;

            if (brickDescriptor && brickDescriptor.insideBrick) {
                if (brickDescriptor.insideLocalizedFields) {
                    var parts = {
                        containerKey: brickDescriptor.brickType,
                        fieldname: brickDescriptor.brickField,
                        brickfield: key
                    }
                    key = "?" + Ext.encode(parts) + "~" + key;
                } else {
                    key = brickDescriptor.brickType + "~" + key;
                }
            }

            if (classificationDescriptor && !Ext.Object.isEmpty(classificationDescriptor)) {
                key = "#cs#" + classificationDescriptor.keyConfig.id + "#" + classificationDescriptor.keyConfig.name
            }

            var text = t(initData.title);
            if (showFieldname) {
                if (brickDescriptor && brickDescriptor.insideBrick && brickDescriptor.insideLocalizedFields) {
                    text = text + "(" + brickDescriptor.brickType + "." + initData.name + ")";
                } else {
                    text = text + " (" + key.replace(/~|\#cs\#|\#"/, ".") + ")";
                }
            }
            var newNode = {
                text: text,
                key: key,
                type: "data",
                layout: initData,
                leaf: isLeaf,
                allowDrag: draggable,
                dataType: type,
                iconCls: "pimcore_icon_" + type,
                expanded: true,
                brickDescriptor: brickDescriptor,
                classificationDescriptor: classificationDescriptor
            };

            newNode = this.appendChild(newNode);

            if (this.rendered) {
                this.expand();
            }

            return newNode;
        } else {
            return null;
        }

    },

    getClassTree: function (url, classId, objectId, targetObjectId) {

        var filterField = new Ext.form.field.Text(
            {
                width: 300,
                hideLabel: true,
                enableKeyEvents: true
            }
        );

        var filterButton = new Ext.button.Button({
            iconCls: "pimcore_icon_search"
        });

        var headerConfig = {
            title: t('class_attributes'),
            items: [
                filterField,
                filterButton
            ]
        };

        var tree = new Ext.tree.TreePanel({
            title: t('class_attributes'),
            iconCls: 'pimcore_icon_gridconfig_class_attributes',
            tbar: headerConfig,
            region: "center",
            autoScroll: true,
            rootVisible: false,
            bufferedRenderer: false,
            animate: false,
            root: {
                id: "0",
                root: true,
                text: t("base"),
                allowDrag: false,
                leaf: true,
                isTarget: true
            },
            viewConfig: {
                plugins: {
                    ptype: 'treeviewdragdrop',
                    enableDrag: true,
                    enableDrop: false,
                    ddGroup: "columnconfigelement"
                }
            }
        });

        Ext.Ajax.request({
            url: url,
            params: {
                id: classId,
                oid: objectId,
                target_oid: targetObjectId
            },
            success: this.initLayoutFields.bind(this, tree)
        });

        filterField.on("keyup", this.updateFilter.bind(this, tree, filterField));
        filterButton.on("click", this.updateFilter.bind(this, tree, filterField));

        return tree;
    },

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract = Class.create({
    type: null,
    class: null,
    objectClassId: null,
    allowedTypes: null,
    allowedParents: null,
    maxChildCount: null,
    
    initialize: function(classId) {
        this.objectClassId = classId;
    },

    getConfigTreeNode: function(configAttributes) {
        return {};
    },


    getCopyNode: function(source) {
        var copy = new Ext.tree.TreeNode({
            text: source.data.text,
            isTarget: true,
            leaf: true,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node) {
    },

    commitData: function() {
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DefaultValue");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DefaultValue = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {

    type: "value",
    class: "DefaultValue",

    getConfigTreeNode: function(configAttributes) {
        var node = {
            draggable: true,
            iconCls: "pimcore_icon_" + configAttributes.dataType,
            text: configAttributes.text,
            qtip: configAttributes.attribute,
            configAttributes: configAttributes,
            isTarget: true,
            leaf: true
        };

        return node;
    },

    getCopyNode: function(source) {

        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            dataType: source.data.dataType,
            qtip: source.data.key,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function(node) {
        this.node = node;

        var value = "original";
        if(this.node.data.configAttributes.label) {
            value = "custom";
        }

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('custom_title'),
            disabled: true,
            length: 255,
            width: 200,
            value: this.node.data.text
        });

        this.radiogroup = new Ext.form.RadioGroup({
            fieldLabel: t('config_title'),
            vertical: false,
            columns: 1,
            value: {rb: value},
            items: [
                {boxLabel: t('config_title_original'), name: 'rb', inputValue: "original", checked: true},
                {
                    boxLabel: t('config_title_custom'),
                    name: 'rb',
                    inputValue: "custom",
                    listeners: {
                        change: function( element, newValue, oldValue, eOpts ) {
                            this.textfield.setDisabled(!newValue);
                        }.bind(this)
                    }
                }
            ]
        });

        this.icon = new Ext.form.TextField({
            fieldLabel: t('custom_icon'),
            length: 255,
            width: 500,
            value: this.node.data.configAttributes.icon
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.radiogroup, this.textfield, this.icon],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 500,
            height: 300,
            modal: true,
            title: t('attribute_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        if(this.radiogroup.getValue().rb == "custom") {
            this.node.data.configAttributes.label = this.textfield.getValue();
            this.node.set('text', this.textfield.getValue());
        } else {
            this.node.data.configAttributes.label = null;
        }

        var iconValue = this.icon ? this.icon.getValue() : null;
        if (iconValue != null && iconValue.length == 0) {
            iconValue = null;
            this.node.data.configAttributes.icon = iconValue;
            var restoredIconClass = "pimcore_icon_" + this.node.data.configAttributes.dataType;
            this.node.set('iconCls', restoredIconClass);
        } else if (iconValue != null) {
            this.node.set('iconCls', null);
        }
        this.node.data.configAttributes.icon = iconValue;
        this.node.set('icon', iconValue);

        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DimensionUnit");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DimensionUnitField = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {

    type: "value",
    class: "DimensionUnitField",

    getConfigTreeNode: function(configAttributes) {
        var node = {
            draggable: true,
            iconCls: "pimcore_icon_" + configAttributes.dataType,
            text: configAttributes.text,
            qtip: configAttributes.attribute,
            configAttributes: configAttributes,
            isTarget: true,
            leaf: true
        };

        return node;
    },

    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            dataType: source.data.dataType,
            qtip: source.data.key,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function(node) {
        this.node = node;

        var value = "original";
        if(this.node.data.configAttributes.label) {
            value = "custom";
        }

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('custom_title'),
            disabled: true,
            length: 255,
            width: 200,
            value: this.node.data.text
        });

        this.radiogroup = new Ext.form.RadioGroup({
            fieldLabel: t('config_title'),
            vertical: false,
            columns: 1,
            value: {rb: value},
            items: [
                {boxLabel: t('config_title_original'), name: 'rb', inputValue: "original", checked: true},
                {
                    boxLabel: t('config_title_custom'),
                    name: 'rb',
                    inputValue: "custom",
                    listeners: {
                        change: function(element, newValue) {
                            this.textfield.setDisabled(!newValue);
                        }.bind(this)
                    }
                }
            ]
        });

        this.combo = new Ext.form.ComboBox({
            fieldLabel: t('dimension_unit_mode'),
            length: 255,
            width: 200,
            mode: 'local',
            store: new Ext.data.ArrayStore({
                id: 0,
                fields: [
                    'id',
                    'displayText'
                ],
                data: [[1, t('raw_data')], [2, t('only_value')], [3, t('value_with_unit')]]
            }),
            valueField: 'id',
            displayField: 'displayText',
            value: this.node.data.configAttributes.mode
        });


        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.radiogroup, this.textfield, this.combo],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            modal: true,
            title: t('attribute_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        if(this.radiogroup.getValue().rb == "custom") {
            this.node.data.configAttributes.label = this.textfield.getValue();
            this.node.set('text', this.textfield.getValue());
        } else {
            this.node.data.configAttributes.label = null;
        }
        this.node.data.configAttributes.mode = this.combo.getValue();
        this.window.close();
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DimensionUnit");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DimensionUnitFieldText = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.DimensionUnitField, {
    type: "value",
    class: "DimensionUnitFieldText"
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.StructuredTable");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.StructuredTable = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {

    type: "value",
    class: "StructuredTable",

    getConfigTreeNode: function(configAttributes) {
        var node = {
            draggable: true,
            iconCls: "pimcore_icon_" + configAttributes.dataType,
            text: this.getText(configAttributes, configAttributes.text),
            configAttributes: configAttributes,
            isTarget: true,
            leaf: true
        };

        return node;
    },

    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            dataType: source.data.dataType,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function(node) {
        this.node = node;

        Ext.Ajax.request({
            url: '/admin/outputdataconfig/admin/get-field-definition',
            params: {
                class_id: this.objectClassId,
                key: node.data.configAttributes.attribute
            },
            success: function(response) {
                var data = Ext.decode(response.responseText);
                if(data.success) {
                    this.openConfigDialog(data.fieldDefinition);
                } else {
                    pimcore.helpers.showNotification(t("error"), t("error_getting_field_definition"), "error", t(data.message));
                }
            }.bind(this)
        });
    },

    openConfigDialog: function(def) {


        var value = "original";
        if(this.node.data.configAttributes.label) {
            value = "custom";
        }

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('custom_title'),
            disabled: true,
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.radiogroup = new Ext.form.RadioGroup({
            fieldLabel: t('config_title'),
            vertical: false,
            columns: 1,
            value: {rb: value},
            items: [
                {boxLabel: t('config_title_original'), name: 'rb', inputValue: "original", checked: true},
                {
                    boxLabel: t('config_title_custom'),
                    name: 'rb',
                    inputValue: "custom",
                    listeners: {
                        change: function(element, newValue) {
                            this.textfield.setDisabled(!newValue);
                        }.bind(this)
                    }
                }
            ]
        });



        var rows = [];
        for(var j = 0; j < def.rows.length; j++) {
            rows.push([def.rows[j].key, def.rows[j].label]);
        }

        var cols = [];
        for(var j = 0; j < def.cols.length; j++) {
            cols.push([def.cols[j].key, def.cols[j].label]);
        }

        this.comboRow = new Ext.form.ComboBox({
            fieldLabel: t('row'),
            disabled: true,
            length: 255,
            width: 200,
            mode: 'local',
            store: new Ext.data.ArrayStore({
                id: 0,
                fields: [
                    'id',
                    'displayText'
                ],
                data: rows
            }),
            valueField: 'id',
            displayField: 'displayText',
            value: this.node.data.configAttributes.row
        });
        this.comboCol = new Ext.form.ComboBox({
            fieldLabel: t('column'),
            length: 255,
            disabled: true,
            width: 200,
            mode: 'local',
            store: new Ext.data.ArrayStore({
                id: 0,
                fields: [
                    'id',
                    'displayText'
                ],
                data: cols
            }),
            valueField: 'id',
            displayField: 'displayText',
            value: this.node.data.configAttributes.col
        });

        var value = "specific_field";
        if(this.node.data.configAttributes.wholeTable) {
            value = "whole_table";
        }
        this.radiogroupTable = new Ext.form.RadioGroup({
            fieldLabel: t('config_table'),
            value: {rbTable: value},
            vertical: false,
            columns: 1,
            items: [
                {boxLabel: t('config_whole_table'), name: 'rbTable', inputValue: "whole_table", checked: true},
                {
                    boxLabel: t('config_specific_field'),
                    name: 'rbTable',
                    inputValue: "specific_field",
                    listeners: {
                        change: function(element, newValue) {
                            this.comboRow.setDisabled(!newValue);
                            this.comboCol.setDisabled(!newValue);
                        }.bind(this)
                    }
                }
            ]
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.radiogroup, this.textfield, this.radiogroupTable, this.comboRow, this.comboCol],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 410,
            modal: true,
            title: t('attribute_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();

        //this is needed because of new focus management of extjs6
        setTimeout(function() {
            this.window.focus();
        }.bind(this), 250);

    },

    commitData: function() {
        if(this.radiogroupTable.getValue().rbTable == "whole_table") {
            this.node.data.configAttributes.wholeTable = true;
            this.node.data.configAttributes.col = null;
            this.node.data.configAttributes.row = null;
        } else {
            this.node.data.configAttributes.wholeTable = false;
            this.node.data.configAttributes.col = this.comboCol.getValue();
            this.node.data.configAttributes.row = this.comboRow.getValue();
        }

        if(this.radiogroup.getValue().rb == "custom") {
            this.node.data.configAttributes.label = this.textfield.getValue();
            this.node.set('text', this.getText(this.node.data.configAttributes, this.textfield.getValue()) );
        } else {
            this.node.data.configAttributes.label = null;
            this.node.set('text', this.getText(this.node.data.configAttributes, this.node.text));
        }

        this.window.close();
    },

    getText: function(config, text) {
        if(!text) {
            text = config.text;
        }
        if(config.wholeTable) {
            return text;
        } else {
            return text + " (" + config.row + ", " + config.col + ")";
        }

    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.KeyValue");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.KeyValue = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {

    type: "value",
    class: "KeyValue",

    getConfigTreeNode: function(configAttributes) {
        var node = {
            draggable: true,
            iconCls: "pimcore_icon_" + configAttributes.dataType,
            text: this.getText(configAttributes, t("keyValue")),
            configAttributes: configAttributes,
            isTarget: true,
            leaf: true
        };

        return node;
    },

    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            dataType: source.data.dataType,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function(node) {
        this.node = node;

        var data = {records: []};
        if(this.node.data.configAttributes && this.node.data.configAttributes.records) {
            data = this.node.data.configAttributes;
        }

        this.store = new Ext.data.JsonStore({
            data: data.records,
            autoDestroy: true,
            idProperty: 'id',
            fields: [
                "id",
                "group",
                "groupdescription",
                "name",
                "description",
                "label"
            ]
        });

        this.cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });

        this.grid = Ext.create('Ext.grid.Panel', {
            store: this.store,
            plugins: [
                this.cellEditing
            ],
            columns: [
                {header: 'ID', dataIndex: 'id', width: 50},
                {id: "group", header: t("keyvalue_tag_col_group"), dataIndex: 'group', width: 150, sortable: false},
                {id: "groupdescription", header: t("keyvalue_tag_col_group_description"), dataIndex: 'groupdescription', width: 150, sortable: false},
                {id: "name", header: t("name"), dataIndex: 'name', width: 150, sortable: false},
                {id: "description", header: t("description"), dataIndex: 'description', width: 150, sortable: false},
                {id: "label", header: t("label"), dataIndex: 'label', flex: 150, sortable: false, editable: true, editor: new Ext.form.TextField()},
                {
                    xtype:'actioncolumn',
                    width:30,
                    items:[
                        {
                            tooltip:t('up'),
                            icon:"/bundles/pimcoreadmin/img/flat-color-icons/up.svg",
                            handler:function (grid, rowIndex) {
                                if (rowIndex > 0) {
                                    var rec = grid.getStore().getAt(rowIndex);
                                    grid.getStore().removeAt(rowIndex);
                                    grid.getStore().insert(rowIndex - 1, [rec]);
                                }
                            }.bind(this)
                        }
                    ]
                },
                {
                    xtype:'actioncolumn',
                    width:30,
                    items:[
                        {
                            tooltip:t('down'),
                            icon:"/bundles/pimcoreadmin/img/flat-color-icons/down.svg",
                            handler:function (grid, rowIndex) {
                                if (rowIndex < (grid.getStore().getCount() - 1)) {
                                    var rec = grid.getStore().getAt(rowIndex);
                                    grid.getStore().removeAt(rowIndex);
                                    grid.getStore().insert(rowIndex + 1, [rec]);
                                }
                            }.bind(this)
                        }
                    ]
                },
                {
                    xtype: 'actioncolumn',
                    width: 30,
                    items: [
                        {
                            tooltip: t('remove'),
                            icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                            handler: function (grid, rowIndex) {
                                grid.getStore().removeAt(rowIndex);
                            }.bind(this)
                        }
                    ]
                }
            ],
            cls: 'object_field',
            tbar: {
                items: [
                    {
                        xtype: "tbtext",
                        text: "<b>" + t("keyvalue_selected_keys") + "</b>"
                    },
                    "->",
                    {
                        xtype: "button",
                        iconCls: "pimcore_icon_delete",
                        handler: function() {
                            this.store.removeAll();
                        }.bind(this)
                    },
                    {
                        xtype: "button",
                        iconCls: "pimcore_icon_add",
                        handler: function() {
                            var selectionWindow = new pimcore.object.keyvalue.selectionwindow(this);
                            selectionWindow.show();
                        }.bind(this)
                    }
                ],
                ctCls: "pimcore_force_auto_width",
                cls: "pimcore_force_auto_width"
            },
            autoHeight: true,
            bodyCls: "pimcore_editable_grid"
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.grid],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 1000,
            height: 400,
            modal: true,
            autoScroll: true,
            title: t('attribute_settings'),
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },


    handleSelectionWindowClosed: function() {
        // nothing to do
    },

    requestPending: function() {
        // nothing to do
    },

    handleAddKeys: function (response) {
        var data = Ext.decode(response.responseText);

        if(data && data.success) {
            for (var i=0; i < data.data.length; i++) {
                var keyDef = data.data[i];

                var totalCount = this.store.data.length;

                var addKey = true;
                for (var x = 0; x < totalCount; x++) {
                    var record = this.store.getAt(x);

                    if (record.data.key == keyDef.id) {
                        addKey = false;
                        break;
                    }
                }

                if (addKey) {
                    var colData = {};
                    colData.id = keyDef.id;
                    colData.name = keyDef.name;
                    colData.description = keyDef.description;
                    colData.group = keyDef.groupName;
                    colData.groupdescription = keyDef.groupdescription;
                    this.store.add(colData);
                }
            }
        }

    },

    commitData: function() {

        var records = [];

        this.store.each(function(record) {
            records.push(record.data);
        });

        this.node.data.configAttributes.records = records;
        this.node.set('text', this.getText(this.node.data.configAttributes, this.node.text) );

        this.window.close();
    },

    getText: function(config, text) {
        if(!text) {
            text = config.text;
        }
        if(config.records.length) {
            var fields = "";
            for(var i = 0; i < config.records.length; i++) {
                fields += config.records[i].name + ", ";
            }

            return text + " (" + fields + ")";
        }

    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.Numeric");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.value.Numeric = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {

    type: "value",
    class: "Numeric",

    getConfigTreeNode: function(configAttributes) {
        var node = {
            draggable: true,
            iconCls: "pimcore_icon_" + configAttributes.dataType,
            text: configAttributes.text,
            configAttributes: configAttributes,
            isTarget: true,
            leaf: true
        };

        return node;
    },

    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            dataType: source.data.dataType,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function(node) {
        this.node = node;

        var value = "original";
        if(this.node.data.configAttributes.label) {
            value = "custom";
        }

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('custom_title'),
            disabled: true,
            length: 255,
            width: 200,
            value: this.node.data.text
        });

        this.radiogroup = new Ext.form.RadioGroup({
            fieldLabel: t('config_title'),
            vertical: false,
            columns: 1,
            value: {rb: value},
            items: [
                {boxLabel: t('config_title_original'), name: 'rb', inputValue: "original", checked: true},
                {
                    boxLabel: t('config_title_custom'),
                    name: 'rb',
                    inputValue: "custom",
                    listeners: {
                        change: function(element, newValue) {
                            this.textfield.setDisabled(!newValue);
                        }.bind(this)
                    }
                }
            ]
        });

        this.formatNumber = new Ext.form.Checkbox({
            fieldLabel: t('format_number'),
            length: 255,
            width: 200,
            checked: this.node.data.configAttributes.formatNumber
        });


        this.precision = new Ext.form.NumberField({
            fieldLabel: t('precision'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.precision
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.radiogroup, this.textfield, this.formatNumber, this.precision],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 320,
            modal: true,
            title: t('attribute_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.precision = this.precision.getValue();
        this.node.data.configAttributes.formatNumber = this.formatNumber.getValue();
        if(this.radiogroup.getValue().rb == "custom") {
            this.node.data.configAttributes.label = this.textfield.getValue();
            this.node.set('text', this.textfield.getValue());
        } else {
            this.node.data.configAttributes.label = null;
        }
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Text");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Text = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {
    type: "operator",
    class: "Text",
    iconCls: "pimcore_icon_operator_text",
    defaultText: "operator_text",


    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.textValue,
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        }
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node) {
        this.node = node;

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('text'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.textValue
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textfield],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 160,
            modal: true,
            title: t('text_operator_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.textValue = this.textfield.getValue();
        this.node.set('text', this.textfield.getValue());
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Group");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Group = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Text, {
    type: "operator",
    class: "Group",
    iconCls: "pimcore_icon_operator_group",
    defaultText: "operator_group",
    windowTitle: "group_operator_settings",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label,
                configAttributes: configAttributes,
                isTarget: true,
                allowChildren: true,
                allowedTypes: this.allowedTypes,
                allowedParents: this.allowedParents,
                maxChildCount: this.maxChildCount,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText),
                allowedParents: this.allowedParents,
                allowedTypes: this.allowedTypes,
                maxChildCount: this.maxChildCount,
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        }
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expandable: false,
            allowedTypes: this.allowedTypes,
            allowedParents: this.allowedParents,
            maxChildCount: this.maxChildCount,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node) {
        this.node = node;

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('text'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textfield],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 150,
            modal: true,
            title: t(this.windowTitle),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.label = this.textfield.getValue();
        this.node.set('text', this.textfield.getValue());
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Concatenator");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Concatenator = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Text, {
    type: "operator",
    class: "Concatenator",
    iconCls: "pimcore_icon_operator_concatenator",
    defaultText: "operator_concatenator",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label,
                configAttributes: configAttributes,
                isTarget: true,
                allowChildren: true,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        }
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expandable: false,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node) {
        this.node = node;

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.glue = new Ext.form.TextField({
            fieldLabel: t('glue'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.glue
        });
        this.forceValue = new Ext.form.Checkbox({
            fieldLabel: t('force_value'),
            length: 255,
            width: 200,
            checked: this.node.data.configAttributes.forceValue
        });
        this.formatNumbers = new Ext.form.Checkbox({
            fieldLabel: t('format_numbers'),
            length: 255,
            width: 200,
            checked: this.node.data.configAttributes.formatNumbers
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textfield, this.glue, this.forceValue, this.formatNumbers],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 200,
            modal: true,
            title: t('concatenator_operator_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.label = this.textfield.getValue();
        this.node.set('text', this.textfield.getValue());
        this.node.data.configAttributes.glue = this.glue.getValue();
        this.node.data.configAttributes.forceValue = this.forceValue.getValue();
        this.node.data.configAttributes.formatNumbers = this.formatNumbers.getValue();
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Table");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Table = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Group, {
    type: "operator",
    class: "Table",
    iconCls: "pimcore_icon_operator_table",
    defaultText: "operator_table",
    windowTitle: "table_operator_settings",
    allowedTypes: {
        operator: { 
            TableRow: true
        }
    },

    getConfigDialog: function(node) {
        this.node = node;

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('text'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.tooltip = new Ext.form.TextArea({
            fieldLabel: t('tooltip'),
            length: 255,
            width: 200,
            height: 100,
            value: this.node.data.configAttributes.tooltip
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textfield, this.tooltip],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 250,
            modal: true,
            title: t(this.windowTitle),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.label = this.textfield.getValue();
        this.node.data.configAttributes.tooltip = this.tooltip.getValue();
        this.node.set('text', this.textfield.getValue());
        this.window.close();
    }


});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TableRow");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TableRow = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Group, {
    type: "operator",
    class: "TableRow",
    iconCls: "pimcore_icon_operator_tablerow",
    defaultText: "operator_tablerow",
    windowTitle: "tablerow_operator_settings",
    allowedTypes: null,
    allowedParents: {
        operator: {
            Table: true
        }
    },

    getConfigDialog: function(node) {
        this.node = node;


        this.headline = new Ext.form.Checkbox({
            fieldLabel: t('headline'),
            checked: this.node.data.configAttributes.headline
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.headline],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 150,
            modal: true,
            title: t(this.windowTitle),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.headline = this.headline.getValue();
        this.window.close();
    }


});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TableCol");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TableCol = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.Group, {
    type: "operator",
    class: "TableCol",
    iconCls: "pimcore_icon_operator_tablecol",
    defaultText: "operator_tablecol",
    windowTitle: "tablecol_operator_settings",
    allowedTypes: null,
    allowedParents: {
        operator: {
            TableRow: true
        }
    },
    maxChildCount: 1,


    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText) + " (" + configAttributes.colspan + ")",
                configAttributes: configAttributes,
                isTarget: true,
                allowChildren: true,
                allowedTypes: this.allowedTypes,
                allowedParents: this.allowedParents,
                maxChildCount: this.maxChildCount,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText),
                configAttributes: configAttributes,
                allowedTypes: this.allowedTypes,
                allowedParents: this.allowedParents,
                maxChildCount: this.maxChildCount,
                isTarget: true,
                leaf: true
            };
        }
        return node;
    },


    getConfigDialog: function(node) {
        this.node = node;

        var value = 1;
        if(this.node.data.configAttributes.colspan) {
            value = this.node.data.configAttributes.colspan;
        }

        this.numberfield = new Ext.form.NumberField({
            fieldLabel: t('colspan'),
            length: 255,
            width: 200,
            value: value
        });

        this.headline = new Ext.form.Checkbox({
            fieldLabel: t('headline'),
            checked: this.node.data.configAttributes.headline
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.numberfield, this.headline],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 150,
            modal: true,
            title: t(this.windowTitle),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.colspan = this.numberfield.getValue();
        this.node.data.configAttributes.headline = this.headline.getValue();
        this.node.set('text', this.node.data.text + " (" + this.numberfield.getValue() + ")" );
        this.window.close();
    }

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TranslateValue");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TranslateValue = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {
    type: "operator",
    class: "TranslateValue",
    iconCls: "pimcore_icon_localizedfields",
    defaultText: "operator_translate_value",


    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t("operator_translate_value"),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                leaf: true
            };
        }
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.cssClass,
            isTarget: true,
            leaf: false,
            maxChildCount: 1,
            expanded: true,
            expandable: false,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node) {
        this.node = node;

        this.prefix = new Ext.form.TextField({
            fieldLabel: t('operator_translate_value_prefix'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.prefix
        });



        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.prefix],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('operator_translate_value_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.prefix = this.prefix.getValue();
        this.node.set('text', t("operator_translate_value") );
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.CellFormater");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.CellFormater = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {
    type: "operator",
    class: "CellFormater",
    iconCls: "pimcore_icon_operator_cell_formater",
    defaultText: "operator_cell_formater",


    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label,
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                leaf: true
            };
        }
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.cssClass,
            isTarget: true,
            leaf: false,
            maxChildCount: 1,
            expanded: true,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node) {
        this.node = node;

        this.cssClass = new Ext.form.TextField({
            fieldLabel: t('operator_cell_formater_css_class'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.cssClass
        });

        this.styles = new Ext.form.TextArea({
            fieldLabel: t('operator_cell_formater_css_styles'),
            length: 255,
            width: 200,
            height: 100,
            value: this.node.data.configAttributes.styles
        });

        this.labelStyles = new Ext.form.TextArea({
            fieldLabel: t('operator_cell_formater_css_label_styles'),
            length: 255,
            width: 200,
            height: 100,
            value: this.node.data.configAttributes.labelStyles
        });


        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.cssClass, this.styles, this.labelStyles],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('operator_cell_formater_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
    },

    commitData: function() {
        this.node.data.configAttributes.cssClass = this.cssClass.getValue();
        this.node.data.configAttributes.styles = this.styles.getValue();
        this.node.data.configAttributes.labelStyles = this.labelStyles.getValue();
        this.node.data.configAttributes.label = this.cssClass.getValue();
        this.node.set('text', this.cssClass.getValue());
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TextAddon");

pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.operator.TextAddon = Class.create(pimcore.bundle.outputDataConfigToolkit.outputDataConfigElements.Abstract, {
    type: "operator",
    class: "TextAddon",
    iconCls: "pimcore_icon_operator_textaddon",
    defaultText: "operator_textaddon",


    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t("operator_textaddon") + (typeof configAttributes.addon != 'undefined' && configAttributes.addon ? ': ' + configAttributes.addon : ''),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: t(this.defaultText),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                leaf: true
            };
        }
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.cssClass,
            isTarget: true,
            leaf: false,
            maxChildCount: 1,
            expanded: true,
            expandable: false,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node) {
        this.node = node;

        this.addon = new Ext.form.TextField({
            fieldLabel: t('operator_textaddon_addon'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.addon
        });



        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.addon],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('operator_textaddon'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function() {
        this.node.data.configAttributes.addon = this.addon.getValue();
        this.node.set('text', t("operator_textaddon")  + (this.addon.getValue() ? ': ' + this.addon.getValue() : ''));
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.web2print");

pimcore.bundle.web2print = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.bundle.web2print";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    uninstall: function () {
    },

    pimcoreReady: function (params, broker) {
        var user = pimcore.globalmanager.get("user");
        var perspectiveCfg = pimcore.globalmanager.get("perspective");


        if (user.isAllowed("web2print_web2print_favourite_output_channels") && perspectiveCfg.inToolbar("settings.favorite_outputdefinitions")) {
            var menu = pimcore.globalmanager.get("layout_toolbar").settingsMenu;
            menu.add({
                text: t("web2print_favorite_outputdefinitions"),
                iconCls: "bundle_outputdataconfig_nav_icon",
                handler: function () {
                    try {
                        pimcore.globalmanager.get("web2print.favorite_outputdefinitions").activate();
                    }
                    catch (e) {
                        pimcore.globalmanager.add("web2print.favorite_outputdefinitions", new pimcore.bundle.web2print.favoriteOutputDefinitionsTable());
                    }
                }
            });
        }
    }
});

new pimcore.bundle.web2print();


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.web2print.favoriteOutputDefinitionsTable");
pimcore.bundle.web2print.favoriteOutputDefinitionsTable = Class.create({

    dataUrl: '/admin/web2printtools/admin/favorite-output-definitions-table-proxy',

    initialize: function () {
        this.getTabPanel();
    },

    activate: function (filter) {
        var tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.setActiveItem("bundle_web2print_favorite_outputdefinitions");
    },

    getHint: function () {
        return "";
    },

    getTabPanel: function () {
        if (!this.panel) {
            this.panel = new Ext.Panel({
                id: "bundle_web2print_favorite_outputdefinitions",
                iconCls: "bundle_outputdataconfig_icon",
                title: t("web2print_favorite_outputdefinitions"),
                border: false,
                layout: "fit",
                closable: true,
                items: [this.createGrid()]
            });

            var tabPanel = Ext.getCmp("pimcore_panel_tabs");
            tabPanel.add(this.panel);
            tabPanel.setActiveItem("bundle_web2print_favorite_outputdefinitions");

            this.panel.on("destroy", function () {
                pimcore.globalmanager.remove("web2print.favorite_outputdefinitions");
            }.bind(this));

            pimcore.layout.refresh();
        }

        return this.panel;
    },

    createGrid: function (response) {
        var itemsPerPage = pimcore.helpers.grid.getDefaultPageSize();

        this.store = pimcore.helpers.grid.buildDefaultStore(
            this.dataUrl,
            [
                {name: 'id'},
                {name: 'description'},
                {name: 'o_classId'},
                {name: 'configuration'}
            ],
            itemsPerPage
        );
        this.pagingtoolbar = pimcore.helpers.grid.buildDefaultPagingToolbar(this.store);

        var gridColumns = [];

        gridColumns.push({header: "ID", width: 40, sortable: true, dataIndex: 'id'});
        gridColumns.push({
            header: t("description"),
            flex: 200,
            sortable: true,
            dataIndex: 'description',
            renderer: Ext.util.Format.htmlEncode,
            filter: 'string',
            editor: new Ext.form.TextField({})
        });
        gridColumns.push({
            header: t("class"), width: 200, sortable: true, dataIndex: 'o_classId',
            editor: new Ext.form.ComboBox({
                triggerAction: 'all',
                editable: false,
                valueField: 'id',
                displayField: 'text',
                store: pimcore.globalmanager.get("object_types_store")
            }),
            renderer: function (value) {
                var store = pimcore.globalmanager.get("object_types_store");
                var classObject = store.getById(value);
                if (classObject) {
                    return classObject.data.text;
                }
            }
        });

        gridColumns.push({
            hideable: false,
            xtype: 'actioncolumn',
            width: 30,
            items: [
                {
                    tooltip: t("web2print_web2print_favourite_output_channel_configuration"),
                    iconCls: "bundle_outputdataconfig_icon",
                    handler: function (grid, rowIndex) {

                        var data = grid.getStore().getAt(rowIndex);

                        if (empty(data.data.o_classId)) {
                            Ext.MessageBox.alert(t("error"), t("web2print_web2print_favourite_output_channel_select_class"));
                            return;
                        }

                        var channel = {
                            id: "SOME-ID",
                            channel: Ext.util.Format.htmlEncode(data.data.description),
                            o_classId: data.data.o_classId,
                            configuration: Ext.decode(data.data.configuration)
                        };

                        var dialog = new pimcore.bundle.outputDataConfigToolkit.OutputDataConfigDialog(
                            channel,
                            this.saveConfigDialog.bind(this, grid, rowIndex)
                        );

                    }.bind(this)
                }
            ]
        });

        gridColumns.push({
            hideable: false,
            xtype: 'actioncolumn',
            width: 40,
            items: [
                {
                    tooltip: t('remove'),
                    icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                    handler: function (grid, rowIndex) {
                        grid.getStore().removeAt(rowIndex);
                    }.bind(this)
                }
            ]
        });

        this.grid = Ext.create('Ext.grid.Panel', {
            frame: false,
            store: this.store,
            border: true,
            columns: gridColumns,
            loadMask: true,
            bodyCls: "pimcore_editable_grid",
            stripeRows: true,
            trackMouseOver: true,
            viewConfig: {
                forceFit: false
            },
            plugins: [
                Ext.create('Ext.grid.plugin.CellEditing', {
                    clicksToEdit: 1
                }),
                'pimcore.gridfilters'
            ],
            selModel: Ext.create('Ext.selection.RowModel', {}),
            bbar: this.pagingtoolbar,
            tbar: [
                {
                    text: t('add'),
                    handler: this.onAdd.bind(this),
                    iconCls: "pimcore_icon_add"
                }
            ]
        });

        this.store.load();

        return this.grid;
    },

    onAdd: function (btn, ev) {
        var u = {};
        this.grid.store.insert(0, u);
    },

    saveConfigDialog: function (grid, rowIndex, configData) {

        var data = grid.getStore().getAt(rowIndex);
        Ext.Ajax.request({
            url: '/admin/outputdataconfig/admin/get-attribute-labels',
            method: 'POST',
            params: {
                classId: data.data.o_classId,
                configuration: Ext.encode(configData.config)
            },
            success: function (response) {
                var responseObject = Ext.decode(response.responseText);
                data.set("configuration", Ext.encode(responseObject.configuration));
            }.bind(this)
        });
    }

});




/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.bundle.web2print.SaveAsFavouriteOutputDefinitionDialog");
pimcore.bundle.web2print.SaveAsFavouriteOutputDefinitionDialog = Class.create({


    initialize: function (currentClassId, callback) {

        var nameText = new Ext.form.TextField({
            name: "text",
            length: 255,
            width: 200
        });

        var configSelector = new Ext.form.ComboBox({
            name: "existing",
            width: 200,
            disabled: true,
            store: new Ext.data.JsonStore({
                proxy: {
                    url: '/admin/web2printtools/admin/favorite-output-definitions',
                    type: 'ajax',
                    reader: {
                        type: 'json',
                        rootProperty: "data",
                        idProperty: 'id'
                    },
                    extraParams: {classId: currentClassId}
                },
                fields: ['id', 'description']
            }),
            valueField: 'id',
            displayField: 'description',
            triggerAction: "all",
            forceSelection: true
        });


        var radioNew = new Ext.form.Radio({
            name: "selection",
            checked: true,
            value: "new",
            listeners: {
                change: function(element, checked) {
                    nameText.setDisabled(!checked);
                    configSelector.setDisabled(checked);
                }
            }
        });

        var compositeNew = {
            xtype: 'fieldcontainer',
            layout: 'hbox',
            hideLabel: true,
            items: [
                radioNew,
                {xtype: 'label', text: t("web2print_outputchanneltable_save_favorite_name"), width: 150, style: 'margin-top: 6px; margin-left: 25px'},
                nameText
            ]
        };

        var radioExisting = new Ext.form.Radio({
            name: "selection",
            value: "existing",
            listeners: {
                change: function(element, checked) {
                    nameText.setDisabled(checked);
                    configSelector.setDisabled(!checked);
                }
            }
        });

        var compositeExisting = {
            xtype: 'fieldcontainer',
            layout: 'hbox',
            hideLabel: true,
            items: [
                radioExisting,
                {xtype: 'label', text: t("web2print_outputchanneltable_overwrite_favorite"), width: 150, style: 'margin-top: 6px; margin-left: 25px'},
                configSelector
            ]
        };

        var configPanel = new Ext.form.FormPanel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            labelWidth: 0,
            items: [compositeNew, compositeExisting],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function() {
                    callback(configPanel.getForm().getFieldValues());
                }.bind(this)
            }]
        });

        this.dialog = new window.parent.Ext.Window({
            width: 450,
            height: 200,
            modal: true,
            title: t('web2print_outputchanneltable_save_favorite'),
            layout: "fit",
            items: [configPanel]
        });

        this.dialog.show();
    },

    close: function() {
        this.dialog.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.document.editables.metaentry.abstract");
pimcore.document.editables.metaentry.abstract = Class.create({

    type: "meta",
    subtype: "abstract",

    getInitData: function(id) {

        var initData = {
            id: id,
            type: this.type,
            subtype: this.subtype
        };

        return initData;
    }

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.document.editables.metaentry.defaultentry");
pimcore.document.editables.metaentry.defaultentry = Class.create(pimcore.document.editables.metaentry.abstract, {

    subtype: "defaultentry",

    openDialog: function(record) {
        var nameText = new Ext.form.TextField({
            name: "name",
            fieldLabel: t('web2print_outputchanneltable_name'),
            length: 255,
            width: 200,
            value: record.data.path
        });
        var valueText = new Ext.form.TextArea({
            name: "value",
            fieldLabel: t('web2print_outputchanneltable_value'),
            length: 255,
            width: 200,
            height: 50,
            value: record.data.config ? record.data.config.value : ''
        });
        var spanCheck = new Ext.form.field.Checkbox({
            name: "span",
            boxLabel: t('web2print_outputchanneltable_span'),
            checked: record.data.config ? record.data.config.span : ''
        });


        var configPanel = new Ext.form.FormPanel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [nameText, valueText, spanCheck],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.updateMetaEntry(record, configPanel.getForm().getFieldValues());
                }.bind(this)
            }]
        });

        this.metaEntryWindow = new Ext.Window({
            width: 450,
            height: 350,
            modal: true,
            title: t('web2print_outputchanneltable_metaentry'),
            layout: "fit",
            items: [configPanel]
        });

        this.metaEntryWindow.show();
    },

    updateMetaEntry: function(record, values) {
        record.set("path", values.name);
        record.set("config", {'value': values.value, 'span': values.span});
        this.metaEntryWindow.close();
    }

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.document.editables.metaentry.table");
pimcore.document.editables.metaentry.table = Class.create(pimcore.document.editables.metaentry.abstract, {

    subtype: "table",

    openDialog: function(record) {
        var nameText = new Ext.form.TextField({
            name: "name",
            fieldLabel: t('web2print_outputchanneltable_name'),
            length: 255,
            width: 400,
            value: record.data.path
        });

        this.valueStore = new Ext.data.JsonStore({
            fields: ["value", "span"],
            data: record.data.config ? record.data.config.values : []
        });

        var valueGrid = Ext.create('Ext.grid.Panel', {
            bodyCls: "pimcore_editable_grid",
            tbar: [{
                xtype: "tbtext",
                text: t("web2print_outputchanneltable_values")
            }, "-", {
                xtype: "button",
                iconCls: "pimcore_icon_add",
                handler: function () {
                    var u = {
                        value: "",
                        span: 1
                    };
                    this.valueStore.insert(0, u);
                }.bind(this)
            }],
            plugins: [
                Ext.create('Ext.grid.plugin.CellEditing', {
                    clicksToEdit: 1
                })
            ],
            viewConfig: {
                plugins: {
                    ptype: 'gridviewdragdrop',
                    dragroup: 'element'
                }
            },
            style: "margin-top: 10px",
            store: this.valueStore,
            width: "100%",
            selModel: Ext.create('Ext.selection.RowModel', {}),
            columnLines: true,
            columns: [
                {header: t("web2print_outputchanneltable_value"), sortable: false, dataIndex: 'value', editor: new Ext.form.TextField({}), flex: 320},
                {header: t("web2print_outputchanneltable_span"), sortable: false, dataIndex: 'span', editor: new Ext.form.NumberField({}), width: 180},
                {
                    xtype: 'actioncolumn',
                    width: 40,
                    items: [
                        {
                            tooltip: t('remove'),
                            icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                            handler: function (grid, rowIndex) {
                                grid.getStore().removeAt(rowIndex);
                            }.bind(this)
                        }
                    ]
                }
            ],
            autoHeight: true
        });

        var configPanel = new Ext.form.FormPanel({
            bodyStyle: "padding: 10px;",
            autoScroll: true,
            items: [nameText, valueGrid],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.updateMetaEntry(record, configPanel.getForm().getFieldValues());
                }.bind(this)
            }]
        });

        this.metaEntryWindow = new Ext.Window({
            width: 650,
            height: 300,
            modal: true,
            title: t('web2print_outputchanneltable_metaentry'),
            layout: "fit",
            items: [configPanel]
        });

        this.metaEntryWindow.show();
    },

    updateMetaEntry: function(record, values) {
        record.set("path", values.name);


        var options = [];
        this.valueStore.commitChanges();
        this.valueStore.each(function (rec) {
            options.push({
                value: rec.get("value"),
                span: rec.get("span")
            });
        });

        record.set("config", {'values': options});
        this.metaEntryWindow.close();
    }

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

document.addEventListener(pimcore.events.pimcoreReady, (e) => {
    const perspectiveCfg = pimcore.globalmanager.get("perspective");

    if (perspectiveCfg.inToolbar("datahub") === false) {
        return
    }

    const user = pimcore.globalmanager.get("user");
    if (user.admin || user.isAllowed("plugin_datahub_config")) {

        let navEl = Ext.get('pimcore_menu_search').insertSibling('<li id="pimcore_menu_datahub" data-menu-tooltip="'
            + t('plugin_pimcore_datahub_toolbar') +
            '" class="pimcore_menu_item pimcore_menu_needs_children"><img alt="datahub" src="/bundles/pimcoreadmin/img/flat-white-icons/mind_map.svg"></li>', 'before');

        navEl.on('mousedown', function () {
            try {
                pimcore.globalmanager.get("plugin_pimcore_datahub_config").activate();
            } catch (e) {
                pimcore.globalmanager.add("plugin_pimcore_datahub_config", new pimcore.plugin.datahub.config());
            }
        });

        pimcore.helpers.initMenuTooltips();
    }
});

document.addEventListener("pimcore.perspectiveEditor.permissions.structure.load", (e) => {
    if (e.detail.context === 'toolbar') {
        e.detail.structure['datahub'] = {};
    }
});

document.addEventListener("pimcore.perspectiveEditor.permissions.load", (e) => {
    const context = e.detail.context;
    const menu = e.detail.menu;
    const permissions = e.detail.permissions;

    if (context === 'toolbar' && menu === 'datahub') {
        if (permissions[context][menu] === undefined) {
            permissions[context][menu] = [];
        }
        if (permissions[context][menu].indexOf('hidden') === -1) {
            permissions[context][menu].push('hidden');
        }
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.config");
pimcore.plugin.datahub.config = Class.create({

    initialize: function () {
        this.getTabPanel();
    },

    activate: function () {
        let tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.setActiveItem(this.getTabPanel());
    },

    getTabPanel: function () {
        if (!this.panel) {
            this.panel = new Ext.Panel({
                id: "pimcore_plugin_datahub_config_tab",
                title: t("plugin_pimcore_datahub_toolbar"),
                iconCls: "plugin_pimcore_datahub_icon",
                border: false,
                layout: "border",
                closable: true,
                items: [this.getTree(), this.getEditPanel()]
            });

            var tabPanel = Ext.getCmp("pimcore_panel_tabs");
            tabPanel.add(this.panel);
            tabPanel.setActiveItem("pimcore_plugin_datahub_config_tab");

            this.panel.on("destroy", function () {
                pimcore.globalmanager.remove("plugin_pimcore_datahub_config");
            }.bind(this));

            pimcore.layout.refresh();
        }

        return this.panel;
    },

    userIsAllowedToCreate: function(adapter) {
        let user = pimcore.globalmanager.get("user");

        //everything is allowed for admins
        if (user.admin || user.isAllowed('plugin_datahub_admin')) {
            return true;
        }

        return user.isAllowed("plugin_datahub_adapter_" + adapter);
    },

    getTree: function () {
        if (!this.tree) {

            var store = Ext.create('Ext.data.TreeStore', {
                autoLoad: false,
                autoSync: true,
                proxy: {
                    type: 'ajax',
                    url: '/admin/pimcoredatahub/config/list',
                    reader: {
                        type: 'json'
                    }
                }
            });

            let menuItems = [];

            let firstHandler;

            for (let key in pimcore.plugin.datahub.adapter) {
                if( pimcore.plugin.datahub.adapter.hasOwnProperty( key ) && this.userIsAllowedToCreate(key)) {
                    let adapter = new pimcore.plugin.datahub.adapter[key](this);

                    if (!firstHandler) {
                        firstHandler = adapter.addConfiguration.bind(adapter, key);
                    }
                    menuItems.push(
                    {
                        text: t('plugin_pimcore_datahub_type_' + key),
                        iconCls: "plugin_pimcore_datahub_icon_" + key,
                        handler: adapter.addConfiguration.bind(adapter, key)
                    });
                }
            }

            var addConfigButton = new Ext.SplitButton({
                text: t("plugin_pimcore_datahub_configpanel_add"),
                iconCls: "pimcore_icon_add",
                handler: firstHandler,
                disabled:  !pimcore.settings['data-hub-writeable'] || !firstHandler,
                menu: menuItems,
            });


            this.tree = new Ext.tree.TreePanel({
                store: store,
                region: "west",
                autoScroll: true,
                animate: true,
                containerScroll: true,
                border: true,
                width: 200,
                split: true,
                root: {
                    id: '0',
                    expanded: true,
                    iconCls: "pimcore_icon_thumbnails"
                },
                rootVisible: false,
                tbar: {
                    items: [
                        addConfigButton
                    ]
                },
                listeners: {
                    itemclick: this.onTreeNodeClick.bind(this),
                    itemcontextmenu: this.onTreeNodeContextmenu.bind(this),
                    render: function () {
                        this.getRootNode().expand()
                    }
                }
            });
        }

        return this.tree;
    },

    getEditPanel: function () {
        if (!this.editPanel) {
            this.editPanel = new Ext.TabPanel({
                region: "center"
            });
        }

        return this.editPanel;
    },


    onTreeNodeClick: function (tree, record, item, index, e, eOpts) {
        if (!record.isLeaf()) {
            return;
        }

        let adapterType = record.data.adapter;
        let adapterImpl = new pimcore.plugin.datahub.adapter[adapterType](this);
        adapterImpl.openConfiguration(record.id);
    },


    onTreeNodeContextmenu: function (tree, record, item, index, e, eOpts) {
        if (!record.isLeaf()) {
            return;
        }

        e.stopEvent();

        tree.select();

        var menu = new Ext.menu.Menu();
        menu.add(new Ext.menu.Item({
            text: t('delete'),
            iconCls: "pimcore_icon_delete",
            disabled: !record.data['writeable'] || (!record.data.permissions.delete),
            handler: this.deleteConfiguration.bind(this, tree, record)
        }));

        menu.add(new Ext.menu.Item({
            text: t('clone'),
            iconCls: "pimcore_icon_clone",
            disabled: !record.data['writeable'] || !this.userIsAllowedToCreate(record.data.adapter),
            handler: this.cloneConfiguration.bind(this, tree, record)
        }));

        menu.showAt(e.pageX, e.pageY);
    },

    cloneConfiguration: function (tree, record) {
        let adapterType = record.data.adapter;
        let adapterImpl = new pimcore.plugin.datahub.adapter[adapterType](this);
        adapterImpl.cloneConfiguration(tree, record);
    },

    deleteConfiguration: function (tree, record) {
        let adapterType = record.data.adapter;
        let adapterImpl = new pimcore.plugin.datahub.adapter[adapterType](this);
        adapterImpl.deleteConfiguration(tree, record);
    },

    refreshTree: function() {
        this.tree.getStore().load({
            node: this.tree.getRootNode()
        });
    }

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.adapter.graphql");
pimcore.plugin.datahub.adapter.graphql = Class.create({

    initialize: function (configPanel) {
        this.configPanel = configPanel;
    },

    addConfiguration: function (type) {
        Ext.MessageBox.prompt(t('plugin_pimcore_datahub_configpanel_enterkey_title'), t('plugin_pimcore_datahub_configpanel_enterkey_prompt'), this.addConfigurationComplete.bind(this, type), null, null, "");
    },

    addConfigurationComplete: function (type, button, value, object) {
        var regresult = value.match(/[a-zA-Z0-9_\-]+/);
        if (button == "ok" && value.length > 2 && value.length <= 80 && regresult == value) {
            Ext.Ajax.request({
                url: "/admin/pimcoredatahub/config/add",
                params: {
                    name: value,
                    type: type
                },
                success: function (response) {
                    var data = Ext.decode(response.responseText);
                    this.configPanel.refreshTree();

                    if (!data || !data.success) {
                        pimcore.helpers.showNotification(t("error"), t("plugin_pimcore_datahub_configpanel_error_adding_config") + ': <br/>' + data.message, "error");
                    } else {
                        this.openConfiguration(data.name);
                    }

                }.bind(this)
            });
        }
        else if (button == "cancel") {
            return;
        }
        else {
            Ext.Msg.alert(t("plugin_pimcore_datahub_configpanel"), value.length <= 80 ? t("plugin_pimcore_datahub_configpanel_invalid_name") : t("plugin_pimcore_datahub_configpanel_invalid_length"));
        }
    },

    openConfiguration: function (id) {
        var existingPanel = Ext.getCmp("plugin_pimcore_datahub_configpanel_panel_" + id);
        if(existingPanel) {
            this.configPanel.editPanel.setActiveTab(existingPanel);
            return;
        }

        Ext.Ajax.request({
            url: "/admin/pimcoredatahub/config/get",
            params: {
                name: id
            },
            success: function (response) {
                var data = Ext.decode(response.responseText);

                pimcore.plugin.datahub.graphql = pimcore.plugin.datahub.graphql || {};
                pimcore.plugin.datahub.graphql.supportedQueryDataTypes = data.supportedGraphQLQueryDataTypes;
                pimcore.plugin.datahub.graphql.supportedMutationDataTypes = data.supportedGraphQLMutationDataTypes;

                let fieldPanel = new pimcore.plugin.datahub.configuration.graphql.configItem(data, this);
                pimcore.layout.refresh();
            }.bind(this)
        });
    },

    cloneConfiguration: function (tree, record) {
        Ext.MessageBox.prompt(t('plugin_pimcore_datahub_configpanel_enterclonekey_title'), t('plugin_pimcore_datahub_configpanel_enterclonekey_enterclonekey_prompt'),
            this.cloneConfigurationComplete.bind(this, tree, record), null, null, "");
    },

    cloneConfigurationComplete: function (tree, record, button, value, object) {

        var regresult = value.match(/[a-zA-Z0-9_\-]+/);
        if (button == "ok" && value.length > 2 && value.length <= 80 && regresult == value) {
            Ext.Ajax.request({
                url: "/admin/pimcoredatahub/config/clone",
                params: {
                    name: value,
                    originalName: record.data.id
                },
                success: function (response) {
                    var data = Ext.decode(response.responseText);

                    this.configPanel.refreshTree();

                    if (!data || !data.success) {
                        pimcore.helpers.showNotification(t("error"), t("plugin_pimcore_datahub_configpanel_error_cloning_config") + ': <br/>' + data.message, "error");
                    } else {
                        this.openConfiguration(data.name, tree, record);
                    }

                }.bind(this)
            });
        }
        else if (button == "cancel") {
            return;
        }
        else {
            Ext.Msg.alert(t("plugin_pimcore_datahub_configpanel"), value.length <= 80 ? t("plugin_pimcore_datahub_configpanel_invalid_name") : t("plugin_pimcore_datahub_configpanel_invalid_length"));
        }
    },

    deleteConfiguration: function (tree, record) {
        Ext.Msg.confirm(t('delete'), t('delete_message'), function (btn) {
            if (btn == 'yes') {
                Ext.Ajax.request({
                    url: "/admin/pimcoredatahub/config/delete",
                    params: {
                        name: record.data.id
                    }
                });

                this.configPanel.getEditPanel().removeAll();
                record.remove();
            }
        }.bind(this));
    },

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.configuration.graphql.configItem");
pimcore.plugin.datahub.configuration.graphql.configItem = Class.create(pimcore.element.abstract, {

    saveUrl: "/admin/pimcoredatahub/config/save",

    initialize: function (data, parent) {
        this.parent = parent;
        this.data = data.configuration;
        this.userPermissions = data.userPermissions;
        this.modificationDate = data.modificationDate;

        this.tab = new Ext.TabPanel({
            activeTab: 0,
            title: this.data.general.name,
            closable: true,
            deferredRender: false,
            forceLayout: true,
            iconCls: "plugin_pimcore_datahub_icon_" + this.data.general.type,
            id: "plugin_pimcore_datahub_configpanel_panel_" + data.name,
            buttons: {
                componentCls: 'plugin_pimcore_datahub_statusbar',
                itemId: 'footer'
            },
            defaults: {
                renderer: Ext.util.Format.htmlEncode
            },
        });

        //create sub panels after main panel is generated - to be able to reference it in sub panels
        this.tab.add(this.getItems());
        this.tab.setActiveTab(0);

        this.tab.on("activate", this.tabactivated.bind(this));
        this.tab.on("destroy", this.tabdestroy.bind(this));

        this.parent.configPanel.editPanel.add(this.tab);
        this.parent.configPanel.editPanel.setActiveTab(this.tab);
        this.parent.configPanel.editPanel.updateLayout();

        this.setupChangeDetector();

        this.showInfo();
    },

    getItems: function() {
        return [this.getGeneral(), this.getSchema(), this.getSecurity(), this.getPermissions()];
    },

    openExplorer: function (callbackFn) {
        Ext.Ajax.request({
            url: '/admin/pimcoredatahub/config/get-explorer-url?name=' + this.data.general.name,

            success: function (callbackFn, response, opts) {

                var data = Ext.decode(response.responseText);
                var securityValues = this.securityForm.getForm().getFieldValues();
                var explorerUrl = window.location.origin + data.explorerUrl;
                if (securityValues && securityValues["method"] == "datahub_apikey") {
                    explorerUrl = explorerUrl + "?apikey=" + securityValues["apikey"];
                }
                callbackFn(explorerUrl);
            }.bind(this, callbackFn)
        });

    },

    showInfo: function () {

        var footer = this.tab.getDockedComponent('footer');

        footer.removeAll();

        footer.add({
            xtype: 'button',
            text: t('plugin_pimcore_datahub_graphql_open_explorer_in_iframe'),
            iconCls: 'pimcore_icon_iframe',
            handler: function () {
                this.openExplorer(function (explorerUrl) {
                    pimcore.helpers.openGenericIframeWindow("plugin_datahub_iframe_" + this.data.general.name, explorerUrl, "plugin_pimcore_datahub_icon_graphql",
                        t("plugin_pimcore_datahub_graphql_iexplorer") + " - " + this.data.general.name
                    );
                }.bind(this));
            }.bind(this)
        });

        footer.add({
            xtype: 'button',
            text: t('plugin_pimcore_datahub_graphql_open_explorer_in_tab'),
            iconCls: 'pimcore_icon_open_window',
            handler: function () {
                this.openExplorer(function (explorerUrl) {
                    window.open(explorerUrl, '_blank');
                }.bind(this));
            }.bind(this)
        });

        let saveButtonConfig = {
            text: t("save"),
            iconCls: "pimcore_icon_apply",
            disabled: !this.data.general.writeable || !this.userPermissions.update,
            handler: this.save.bind(this)
        };
        if(!this.data.general.writeable) {
            saveButtonConfig.tooltip = t("config_not_writeable");
        }
        footer.add(saveButtonConfig);
    },

    tabactivated: function () {
        this.tabdestroyed = false;
    },

    tabdestroy: function () {
        this.tabdestroyed = true;
    },

    getGeneral: function () {


        this.generalForm = new Ext.form.FormPanel({
            bodyStyle: "padding:10px;",
            autoScroll: true,
            defaults: {
                labelWidth: 200,
                width: 600
            },
            border: false,
            title: t("plugin_pimcore_datahub_configpanel_item_general"),
            items: [
                {
                    xtype: "checkbox",
                    fieldLabel: t("active"),
                    name: "active",
                    value: this.data.general && this.data.general.hasOwnProperty("active") ? this.data.general.active : true
                },
                {
                    xtype: "textfield",
                    fieldLabel: t("type"),
                    name: "type",
                    value: t("plugin_pimcore_datahub_type_" + this.data.general.type),
                    readOnly: true
                },
                {
                    xtype: "textfield",
                    fieldLabel: t("name"),
                    name: "name",
                    value: this.data.general.name,
                    readOnly: true
                },
                {
                    name: "description",
                    fieldLabel: t("description"),
                    xtype: "textarea",
                    height: 100,
                    value: this.data.general.description
                },
                {
                    xtype: "textfield",
                    fieldLabel: t("group"),
                    name: "group",
                    value: this.data.general.group
                },
                {
                    xtype: "displayfield",
                    hideLabel: true,
                    value: t("plugin_pimcore_datahub_configpanel_condition_hint"),
                    readOnly: true,
                    disabled: true
                },
                {
                    name: "sqlObjectCondition",
                    fieldLabel: t("plugin_pimcore_datahub_configpanel_sqlObjectCondition"),
                    xtype: "textarea",
                    height: 100,
                    value: this.data.general.sqlObjectCondition
                }
            ]
        });

        return this.generalForm;
    },

    getSecurity: function () {

        var methodsStore = Ext.create('Ext.data.Store', {
            fields: ['method', 'translatedMethod'],
            data: [{
                'method': 'datahub_apikey',
                "translatedMethod": t("plugin_pimcore_datahub_configpanel_security_method_apikey"),
                'allowBlank': false
            }]
        });


        this.documentWorkspace = new pimcore.plugin.datahub.workspace.document(this);
        this.assetWorkspace = new pimcore.plugin.datahub.workspace.asset(this);
        this.objectWorkspace = new pimcore.plugin.datahub.workspace.object(this);

        var apikeyField = new Ext.form.field.TextArea({
            xtype: "textareafield",
            labelWidth: 200,
            width: 600,
            height: 100,
            fieldLabel: t("plugin_pimcore_datahub_security_datahub_apikey"),
            name: "apikey",
            value: this.data.security ? Array.isArray(this.data.security.apikey) ? this.data.security.apikey.join("\n") : this.data.security.apikey : "",
            minLength: 16
        });

        var skipPermissionCheck = new Ext.form.Checkbox({
            fieldLabel: t('plugin_pimcore_datahub_skip_permission_check'),
            labelWidth: 200,
            name: "skipPermissionCheck",
            value: this.data.security ? this.data.security.skipPermissionCheck : ""
        });

        var disableIntrospection = new Ext.form.Checkbox({
            fieldLabel: t('plugin_pimcore_datahub_disable_introspection'),
            labelWidth: 200,
            name: "disableIntrospection",
            value: this.data.security ? this.data.security.disableIntrospection : ""
        });

        this.securityForm = new Ext.form.FormPanel({
            bodyStyle: "padding:10px;",
            autoScroll: true,
            defaults: {
                labelWidth: 200
            },
            border: false,
            title: t("plugin_pimcore_datahub_configpanel_security"),
            items: [
                {
                    xtype: "combobox",
                    fieldLabel: t("plugin_pimcore_datahub_configpanel_security_method"),
                    name: "method",
                    store: methodsStore,
                    value: this.data.security && this.data.security.method ? this.data.security.method : "datahub_apikey",
                    valueField: 'method',
                    displayField: 'translatedMethod',
                    width: 600
                },
                {
                    xtype: "fieldcontainer",
                    layout: 'hbox',

                    items: [
                        apikeyField,
                        {
                            xtype: "button",
                            width: 32,
                            style: "margin-left: 8px",
                            iconCls: "pimcore_icon_clear_cache",
                            handler: function () {
                                let val = apikeyField.getValue();
                                let newKey = md5(uniqid());
                                apikeyField.setValue(val ? val + "\n" + newKey : newKey);
                            }.bind(this)
                        }
                    ]
                },
                {
                    xtype: 'displayfield',
                    hideLabel: true,
                    value: t("plugin_pimcore_datahub_security_apikey_description"),
                    cls: "pimcore_extra_label_bottom",
                    style: "padding-bottom: 0px",
                    readOnly: true,
                    disabled: true
                },
                skipPermissionCheck,
                disableIntrospection,
                {
                    xtype: 'displayfield',
                    hideLabel: true,
                    value: t("plugin_pimcore_datahub_security_introspection_description"),
                    cls: "pimcore_extra_label_bottom",
                    style: "padding-bottom: 0px",
                    readOnly: true,
                    disabled: true
                },
                {
                    xtype: 'fieldset',
                    width: 800,
                    title: t("workspaces"),
                    items: [
                        this.documentWorkspace.getPanel(),
                        this.assetWorkspace.getPanel(),
                        this.objectWorkspace.getPanel()
                    ]
                }
            ]
        });

        return this.securityForm;
    },

    getSchema: function () {

        this.createSchemaStoreAndGrid("query");
        this.createSchemaStoreAndGrid("mutation");
        this.createSpecialSettingsGrid();

        this.schemaForm = new Ext.form.FormPanel({
            bodyStyle: "padding:10px;",
            autoScroll: true,
            defaults: {
                labelWidth: 200,
                width: 800
            },
            border: false,
            title: t("plugin_pimcore_datahub_configpanel_schema"),
            items: [
                {
                    xtype: 'fieldset',
                    title: t('plugin_pimcore_datahub_graphql_query_schema'),
                    items: [
                        this.querySchemaGrid
                    ]
                }, {
                    xtype: 'fieldset',
                    title: t('plugin_pimcore_datahub_graphql_mutation_schema'),
                    items: [
                        this.mutationSchemaGrid
                    ]
                },
                {
                    xtype: 'fieldset',
                    title: t('plugin_pimcore_datahub_graphql_special_schema'),
                    items: [
                        this.specialSchemaGrid
                    ]
                }
            ]
        });

        return this.schemaForm;
    },

    onAdd: function (type) {
        this.showEntitySelectionDialog(type);
    },

    updateData: function (data, grid) {
    },

    createSchemaStoreAndGrid: function (type) {
        var schemaToolbar = Ext.create('Ext.Toolbar', {
            cls: 'main-toolbar',
            items: [
                {
                    text: t('add'),
                    handler: this.onAdd.bind(this, type),
                    iconCls: "pimcore_icon_add"
                }
            ]
        });

        var fields = ['id', 'columnConfig'];
        if (type == "mutation") {
            fields.push("create");
            fields.push("update");
            fields.push("delete");
        }
        this[type + "SchemaStore"] = Ext.create('Ext.data.Store', {
            reader: {
                type: 'memory'
            },
            fields: fields,
            data: this.data.schema[type + "Entities"]
        });

        var columns = [
            {
                text: t("plugin_pimcore_datahub_configpanel_entity"),
                sortable: true,
                dataIndex: 'id',
                editable: false,
                filter: 'string',
                flex: 1
            }
        ];

        var additionalColumns = ["create", "update", "delete"];
        if (type == "mutation") {
            for (var i = 0; i < additionalColumns.length; i++) {
                var checkColumn = Ext.create('Ext.grid.column.Check', {
                    text: t(additionalColumns[i]),
                    dataIndex: additionalColumns[i]
                });
                columns.push(checkColumn);
            }
        }

        columns.push({
            xtype: 'actioncolumn',
            text: t('settings'),
            menuText: t('settings'),
            width: 60,
            items: [
                {
                    tooltip: t('settings'),
                    icon: "/bundles/pimcoreadmin/img/flat-color-icons/settings.svg",
                    handler: function (grid, rowIndex) {
                        var record = grid.getStore().getAt(rowIndex);

                        var classStore = pimcore.globalmanager.get("object_types_store");
                        var classIdx = classStore.findExact("text", record.data.id);
                        if (classIdx >= 0) {
                            var classRecord = classStore.getAt(classIdx);
                            classId = classRecord.data.id;
                            var columnConfig = record.get("columnConfig");

                            var dialog = new pimcore.plugin.datahub.fieldConfigDialog(type, {
                                    className: classRecord.data.text,
                                    classId: classId
                                },
                                columnConfig,
                                function (data, settings) {
                                    record.set('columnConfig', data);
                                }, null);
                        }
                    }.bind(this)
                }]
        });

        columns.push({
            xtype: 'actioncolumn',
            text: t('delete'),
            menuText: t('delete'),
            width: 60,
            items: [{
                tooltip: t('delete'),
                icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                handler: function (grid, rowIndex) {
                    grid.getStore().removeAt(rowIndex);
                }.bind(this)
            }
            ]
        });

        var prop = type + "SchemaGrid";
        this[prop] = Ext.create('Ext.grid.Panel', {
            frame: false,
            bodyCls: "pimcore_editable_grid",
            autoScroll: true,
            store: this[type + "SchemaStore"],
            columnLines: true,
            stripeRows: true,
            columns: {
                items: columns
            },
            trackMouseOver: true,
            selModel: Ext.create('Ext.selection.RowModel', {}),
            tbar: schemaToolbar,
            viewConfig: {
                forceFit: true,
                enableTextSelection: true
            }
        });

    },

    createSpecialSettingsGrid: function () {
        var schemaToolbar = Ext.create('Ext.Toolbar', {
            cls: 'main-toolbar'
        });

        var fields = ['id', 'create', 'read', 'update', 'delete'];

        this.specialSchemaStore = Ext.create('Ext.data.Store', {
            reader: {
                type: 'memory'
            },
            fields: fields,
            data: this.data.schema.specialEntities
        });

        var columns = [
            {
                sortable: true,
                dataIndex: 'name',
                editable: false,
                filter: 'string',
                renderer: function (v) {
                    return t("plugin_pimcore_datahub_graphql_special_" + v);
                },
                flex: 1
            }
        ];

        var additionalColumns = ["create", "read", "update", "delete"];

        for (var i = 0; i < additionalColumns.length; i++) {
            var checkColumn = Ext.create('Ext.grid.column.Check', {
                text: t(additionalColumns[i]),
                dataIndex: additionalColumns[i] + 'Allowed',
                operationIndex: additionalColumns[i],
                listeners: {
                    beforecheckchange: function (checkCol, rowIndex, checked) {
                        var store = this.specialSchemaGrid.getStore();
                        var record = store.getAt(rowIndex);
                        var possibleValue = checkCol.operationIndex + 'Possible';

                        if (!record.get(possibleValue)) {
                            pimcore.helpers.showNotification(t("info"), "Operation is not implemented.");
                            return false;
                        }

                        return true;
                    }.bind(this)}
            });
            columns.push(checkColumn);
        }

        this.specialSchemaGrid = Ext.create('Ext.grid.Panel', {
            frame: false,
            bodyCls: "pimcore_editable_grid",
            autoScroll: true,
            store: this.specialSchemaStore,
            columnLines: true,
            stripeRows: true,
            columns: {
                items: columns
            },
            trackMouseOver: true,
            tbar: schemaToolbar,
            viewConfig: {
                forceFit: true,
                enableTextSelection: true
            }
        });
    },

    createPermissionsGrid: function (type) {
        let fields = ['id', 'read', 'update', 'delete'];

        let permissions = [];
        if (this.data.permissions && this.data.permissions[type]) {
            permissions = this.data.permissions[type];
        }

        this[type + "PermissionsStore"] = Ext.create('Ext.data.Store', {
            reader: {
                type: 'memory'
            },
            fields: fields,
            data: permissions
        });

        let columns = [
            {
                dataIndex: 'id',
                hidden: true
            },
            {
                sortable: true,
                dataIndex: 'name',
                editable: false,
                filter: 'string',
                flex: 1
            }
        ];

        let additionalColumns = ["read", "update", "delete"];

        for (let i = 0; i < additionalColumns.length; i++) {
            let checkColumn = Ext.create('Ext.grid.column.Check', {
                text: t(additionalColumns[i]),
                dataIndex: additionalColumns[i],
                operationIndex: additionalColumns[i],
            });
            columns.push(checkColumn);
        }

        columns.push({
            xtype: 'actioncolumn',
            menuText: t('delete'),
            width: 30,
            items: [{
                tooltip: t('delete'),
                icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                handler: function (grid, rowIndex) {
                    grid.getStore().removeAt(rowIndex);
                }.bind(this)
            }
            ]
        });

        let permissionsToolbar = Ext.create('Ext.Toolbar', {
            cls: 'main-toolbar',
            items: [
                {
                    text: t('add'),
                    handler: this.showPermissionDialog.bind(this, type),
                    iconCls: "pimcore_icon_add"
                }
            ]
        });

        this[type + "PermissionsGrid"] = Ext.create('Ext.grid.Panel', {
            frame: false,
            bodyCls: "pimcore_editable_grid",
            autoScroll: true,
            store: this[type + "PermissionsStore"],
            columnLines: true,
            stripeRows: true,
            columns: {
                items: columns
            },
            trackMouseOver: true,
            tbar: permissionsToolbar,
            viewConfig: {
                forceFit: true,
                enableTextSelection: true
            }
        });
    },

    getPermissions: function () {
        if (!this.userPermissions.update) {
            return;
        }

        this.createPermissionsGrid("user");
        this.createPermissionsGrid("role");

        this.permissionsForm = new Ext.form.FormPanel({
            bodyStyle: "padding:10px;",
            autoScroll: true,
            defaults: {
                labelWidth: 200,
                width: 800
            },
            border: false,
            title: t("plugin_pimcore_datahub_configpanel_permissions"),
            items: [
                {
                    xtype: 'fieldset',
                    title: t('plugin_pimcore_datahub_graphql_permissions_roles'),
                    items: [
                        this.rolePermissionsGrid
                    ]
                }, {
                    xtype: 'fieldset',
                    title: t('plugin_pimcore_datahub_graphql_permissions_users'),
                    items: [
                        this.userPermissionsGrid
                    ]
                }
            ]
        });

        return this.permissionsForm;
    },

    getSaveDataArray: function () {
        var saveData = {};
        saveData["general"] = this.generalForm.getForm().getFieldValues(false, false);
        saveData["schema"] = this.schemaForm.getForm().getFieldValues();
        saveData["security"] = this.securityForm.getForm().getFieldValues(false, false);
        saveData["schema"]["queryEntities"] = this.getSchemaData("query");
        saveData["schema"]["mutationEntities"] = this.getSchemaData("mutation");
        saveData["schema"]["specialEntities"] = this.getSchemaData("special");
        saveData["workspaces"] = {};
        saveData["workspaces"]["asset"] = this.assetWorkspace.getValues();
        saveData["workspaces"]["document"] = this.documentWorkspace.getValues();
        saveData["workspaces"]["object"] = this.objectWorkspace.getValues();
        saveData["permissions"] = this.getPermissionsSaveData();
        return saveData;
    },

    getSaveData: function () {
        return Ext.encode(this.getSaveDataArray());
    },

    getPermissionsSaveData: function () {
        if (this.userPermissionsStore) {
            let data = {};
            data["user"] = this.getPermissionsData("user");
            data["role"] = this.getPermissionsData("role");

            return data;
        }

        return this.data.permissions;
    },

    getSchemaData: function (type) {
        var tmData = [];

        var store = this[type + "SchemaStore"];
        var data = store.queryBy(function (record, id) {
            return true;
        });

        for (var i = 0; i < data.items.length; i++) {
            tmData.push(data.items[i].data);
        }

        return tmData;
    },

    getPermissionsData: function (type) {
        var tmData = [];

        var store = this[type + "PermissionsStore"];
        var data = store.queryBy(function (record, id) {
            return true;
        });

        for (var i = 0; i < data.items.length; i++) {
            tmData.push(data.items[i].data);
        }

        return tmData;
    },

    save: function () {
        const saveData = this.getSaveData();
        Ext.Ajax.request({
            url: this.saveUrl,
            params: {
                data: saveData,
                modificationDate: this.modificationDate
            },
            method: "post",
            success: function (response) {
                const rdata = Ext.decode(response.responseText);
                if (rdata && rdata.success) {
                    this.modificationDate = rdata.modificationDate;
                    this.saveOnComplete();
                } else if(rdata && rdata.permissionError) {
                    pimcore.helpers.showNotification(t("error"), t("plugin_pimcore_datahub_configpanel_item_saveerror_permissions"), "error");
                    this.tab.setActiveTab(this.tab.items.length-1);
                } else {
                    pimcore.helpers.showNotification(t("error"), t("plugin_pimcore_datahub_configpanel_item_saveerror"), "error", t(rdata.message));
                }
            }.bind(this)
        });
    },

    saveOnComplete: function () {
        this.parent.configPanel.tree.getStore().load({
            node: this.parent.configPanel.tree.getRootNode()
        });

        pimcore.helpers.showNotification(t("success"), t("plugin_pimcore_datahub_configpanel_item_save_success"), "success");

        this.resetChanges();
    },

    showEntitySelectionDialog: function (type) {

        var store = this[type + "SchemaStore"];
        this.entitySelectionDialog = new Ext.Window({
            autoHeight: true,
            title: t('plugin_pimcore_datahub_operator_select_entity'),
            closeAction: 'close',
            width: 500,
            modal: true
        });

        var entityStore = new Ext.data.JsonStore({
            proxy: {
                url: '/admin/class/get-tree',
                type: 'ajax',
                reader: {
                    type: 'json',
                    idProperty: 'text'
                }
            },
            fields: ['id'],
            autoDestroy: true,
            autoLoad: true,
            sortInfo: {field: 'id', direction: "ASC"}
        });

        var entityCombo = new Ext.form.ComboBox(
            {
                xtype: "combo",
                fieldLabel: t("plugin_pimcore_datahub_configpanel_entity"),
                store: entityStore,
                triggerAction: 'all',
                editable: false,
                width: 450
            }
        );

        var form = new Ext.form.FormPanel({
            bodyStyle: 'padding: 10px;',
            items: [entityCombo],
            bbar: [
                "->",
                {
                    xtype: "button",
                    text: t("OK"),
                    iconCls: "pimcore_icon_bool",
                    handler: function () {
                        var entity = entityCombo.getValue();
                        if (entity) {
                            var record = store.getById(entity);
                            if (!record) {
                                var newData = {
                                    id: entity,
                                    name: entity
                                };
                                if (type == "mutation") {
                                    newData["update"] = true;
                                }
                                var addedRecord = store.addSorted(newData);
                                addedRecord = addedRecord[0];
                                this[type + "SchemaGrid"].getSelectionModel().select([addedRecord]);
                            }
                        }

                        this.entitySelectionDialog.close();

                    }.bind(this)
                },
                {
                    xtype: "button",
                    text: t("cancel"),
                    iconCls: "pimcore_icon_cancel",
                    handler: function () {
                        this.entitySelectionDialog.close();
                    }.bind(this)
                }]
        });

        this.entitySelectionDialog.add(form);
        this.entitySelectionDialog.show();
    },

    showPermissionDialog: function (type) {
        let store = this[type + "PermissionsStore"];
        this.permissionDialog = new Ext.Window({
            autoHeight: true,
            title: t('plugin_pimcore_datahub_operator_select_' + type),
            closeAction: 'close',
            width: 500,
            modal: true
        });

        let permissionStore = new Ext.data.JsonStore({
            proxy: {
                url: '/admin/pimcoredatahub/config/permissions-users',
                extraParams: {
                    type: type,
                },
                type: 'ajax',
                reader: {
                    type: 'json',
                    idProperty: 'id',
                }
            },
            fields: ['id', 'text'],
            autoDestroy: true,
            autoLoad: true,
            sortInfo: {field: 'id', direction: "ASC"}
        });

        let permissionCombo = new Ext.form.field.Tag({
            fieldLabel: t("plugin_pimcore_datahub_configpanel_" + type),
            store: permissionStore,
            triggerAction: 'all',
            editable: true,
            width: 450,
            queryMode: 'local',
            filterPickList: true,
            valueField: "id",
            displayField: "text"
        });

        let form = new Ext.form.FormPanel({
            bodyStyle: 'padding: 10px;',
            items: [permissionCombo],
            bbar: [
                "->",
                {
                    xtype: "button",
                    text: t("OK"),
                    iconCls: "pimcore_icon_bool",
                    handler: function () {
                        var userIds = permissionCombo.getValue();
                        Ext.each(userIds, function (userId) {
                            var record = store.getById(userId);
                            var selected = permissionStore.getById(userId);
                            if (!record) {
                                let newUser = {
                                    id: selected.get('id'),
                                    name: selected.get('text')
                                };
                                let addedRecord = store.addSorted(newUser);
                                addedRecord = addedRecord[0];
                                this[type + "PermissionsGrid"].getSelectionModel().select([addedRecord]);
                            }
                        }.bind(this));

                        this.permissionDialog.close();

                    }.bind(this)
                },
                {
                    xtype: "button",
                    text: t("cancel"),
                    iconCls: "pimcore_icon_cancel",
                    handler: function () {
                        this.permissionDialog.close();
                    }.bind(this)
                }]
        });

        this.permissionDialog.add(form);
        this.permissionDialog.show();
    },

    _confirmDirtyClose: function () {
        Ext.MessageBox.confirm(
            t("element_has_unsaved_changes"),
            t("element_unsaved_changes_message"),
            function (buttonValue) {
                if (buttonValue === "yes") {
                    this._confirmedDirtyClose = true;

                    this.tab.fireEventedAction("close", [this.tab, {}]);
                    this.parent.configPanel.editPanel.remove(this.tab);
                }
            }.bind(this)
        );
    }

});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.fieldConfigDialog");
pimcore.plugin.datahub.fieldConfigDialog = Class.create({

    showFieldname: true,
    data: {},
    brickKeys: [],

    initialize: function (type, generalConfig, columnConfig, callback, settings) {

        this.type = type;
        this.generalConfig = generalConfig || {};
        this.columnConfig = columnConfig || {};
        this.columnConfig.columns = this.columnConfig.columns || [];
        this.callback = callback;

        this.settings = settings || {};

        if (!this.callback) {
            this.callback = function () {
            };
        }

        this.configPanel = new Ext.Panel({
            layout: "border",
            iconCls: "pimcore_icon_table",
            title: t("plugin_pimcore_datahub_configpanel_fields"),
            items: [
                this.getSelectionPanel(), this.getLeftPanel()]

        });


        var tabs = [this.configPanel];

        this.tabPanel = new Ext.TabPanel({
            activeTab: 0,
            forceLayout: true,
            items: tabs
        });

        buttons = [];

        buttons.push({
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData();
                }.bind(this)
            }
        );

        this.window = new Ext.Window({
            width: 950,
            height: '95%',
            modal: true,
            title: t("plugin_pimcore_datahub_" + this.type) + " " + t('plugin_pimcore_datahub_configpanel_schema_fields') + ' - ' + this.generalConfig.className,
            layout: "fit",
            items: [this.tabPanel],
            buttons: buttons
        });

        this.window.show();
    },

    doBuildChannelConfigTree: function (configuration) {

        var elements = [];
        if (configuration) {
            for (var i = 0; i < configuration.length; i++) {
                var configElement = this.getConfigElement(configuration[i]);
                if (configElement) {
                    var treenode = configElement.getConfigTreeNode(configuration[i].attributes);

                    if (configuration[i].attributes && configuration[i].attributes.childs) {
                        var childs = this.doBuildChannelConfigTree(configuration[i].attributes.childs);
                        treenode.children = childs;
                        if (childs.length > 0) {
                            treenode.expandable = true;
                        }
                    }
                    elements.push(treenode);
                } else {
                    console.log("config element not found");
                }
            }
        }
        return elements;
    },

    getLeftPanel: function () {
        if (!this.leftPanel) {

            var items = this.getOperatorTrees();
            items.unshift(this.getClassDefinitionTreePanel());

            this.brickKeys = [];
            this.leftPanel = new Ext.Panel({
                cls: "pimcore_panel_tree pimcore_gridconfig_leftpanel",
                region: "center",
                split: true,
                width: 300,
                minSize: 175,
                collapsible: true,
                collapseMode: 'header',
                collapsed: false,
                animCollapse: false,
                layout: 'accordion',
                hideCollapseTool: true,
                header: false,
                layoutConfig: {
                    animate: false
                },
                hideMode: "offsets",
                items: items
            });
        }

        return this.leftPanel;
    },


    doGetRecursiveData: function (node) {
        var childs = [];
        node.eachChild(function (child) {
            var attributes = child.data.configAttributes;
            attributes.childs = this.doGetRecursiveData(child);
            var childConfig = {
                "isOperator": child.data.isOperator ? true : false,
                "attributes": attributes
            };

            childs.push(childConfig);
        }.bind(this));

        return childs;
    },


    commitData: function () {

        this.data = {};


        var operatorFound = false;

        if (this.selectionPanel) {
            this.data.columns = [];
            this.selectionPanel.getRootNode().eachChild(function (child) {
                var obj = {};

                if (child.data.isOperator) {
                    var attributes = child.data.configAttributes;
                    var operatorChilds = this.doGetRecursiveData(child);
                    attributes.childs = operatorChilds;
                    operatorFound = true;

                    obj.isOperator = true;
                    obj.attributes = attributes;

                } else {
                    var attributes = {};
                    attributes.attribute = child.data.key;
                    attributes.label = child.data.layout ? child.data.layout.title : child.data.text;
                    attributes.dataType = child.data.dataType;
                    if (child.data.width) {
                        attributes.width = child.data.width;
                    }
                    obj.attributes = attributes;
                    obj.isOperator = false;
                }

                this.data.columns.push(obj);
            }.bind(this));
        }

        var user = pimcore.globalmanager.get("user");


        if (!operatorFound) {
            this.callback(this.data, this.settings);
            this.window.close();
        } else {
            var columnsPostData = Ext.encode(this.data.columns);
            Ext.Ajax.request({
                //TODO what to do with this stuff ?

                url: "/admin/object-helper/prepare-helper-column-configs",
                method: 'POST',
                params: {
                    columns: columnsPostData
                },
                success: function (response) {
                    var responseData = Ext.decode(response.responseText);
                    this.data.columns = responseData.columns;

                    this.callback(this.data, this.settings);
                    this.window.close();


                }.bind(this)
            });
        }
    },

    openConfigDialog: function (element, copy) {
        var window = element.getConfigDialog(copy, null);

        if (window) {
            //this is needed because of new focus management of extjs6
            setTimeout(function () {
                window.focus();
            }, 250);
        }
    },


    getSelectionPanel: function () {
        if (!this.selectionPanel) {

            var childs = [];
            for (var i = 0; i < this.columnConfig.columns.length; i++) {
                var nodeConf = this.columnConfig.columns[i];

                if (nodeConf.isOperator) {
                    var child = this.doBuildChannelConfigTree([nodeConf]);
                    if (!child || !child[0]) {
                        continue;
                    }
                    child = child[0];
                } else {
                    var attributes = nodeConf.attributes;
                    let text = attributes.label ? t(attributes.label) : `(${attributes.attribute})`;

                    if (attributes.dataType !== "system" && this.showFieldname && attributes.key) {
                        text = text + " (" + attributes.key.replace("~", ".") + ")";
                    }

                    var child = {
                        text: text,
                        key: attributes.attribute,
                        type: "data",
                        dataType: attributes.dataType,
                        leaf: true,
                        layout: attributes.layout,
                        iconCls: "pimcore_icon_" + attributes.dataType
                    };
                    if (attributes.width) {
                        child.width = attributes.width;
                    }
                }
                childs.push(child);
            }

            this.cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
                clicksToEdit: 1
            });

            var store = new Ext.data.TreeStore({
                fields: [{
                    name: "text"
                }
                ],
                root: {
                    id: "0",
                    root: true,
                    text: t("plugin_pimcore_datahub_configpanel_root"),
                    leaf: false,
                    isTarget: true,
                    expanded: true,
                    children: childs
                }
            });

            this.selectionPanel = new Ext.tree.TreePanel({
                store: store,
                plugins: [this.cellEditing],
                rootVisible: true,
                viewConfig: {
                    plugins: {
                        ptype: 'treeviewdragdrop',
                        ddGroup: "columnconfigelement"
                    },
                    listeners: {
                        beforedrop: function (node, data, overModel, dropPosition, dropHandlers, eOpts) {
                            var target = overModel.getOwnerTree().getView();
                            var source = data.view;

                            if (target != source) {
                                var record = data.records[0];
                                var isOperator = record.data.isOperator;
                                var realOverModel = overModel;
                                if (dropPosition == "before" || dropPosition == "after") {
                                    realOverModel = overModel.parentNode;
                                }

                                if (isOperator || this.parentIsOperator(realOverModel)) {
                                    var attr = record.data;
                                    if (record.data.configAttributes) {
                                        attr = record.data.configAttributes;
                                    }
                                    var elementConfig = {
                                        "isOperator": true,
                                        "attributes": attr
                                    }

                                    var element = this.getConfigElement(elementConfig);
                                    var copy = element.getCopyNode(record);
                                    data.records = [copy]; // assign the copy as the new dropNode
                                    this.openConfigDialog(element, copy);
                                } else {

                                    if (!this.checkSupported(record)) {
                                        dropHandlers.cancelDrop();
                                        return false;
                                    }


                                    if (this.selectionPanel.getRootNode().findChild("key", record.data.key)) {
                                        dropHandlers.cancelDrop();
                                    } else {
                                        var copy = Ext.apply({}, record.data);
                                        delete copy.id;
                                        copy = record.createNode(copy);

                                        var ownerTree = this.selectionPanel;


                                        //TODO in case this ever get's reintegrated in to the core,
                                        // we don't support this on key level !
                                        // if (record.data.dataType == "classificationstore") {
                                        //     setTimeout(function () {
                                        //         var ccd = new pimcore.object.classificationstore.columnConfigDialog();
                                        //         ccd.getConfigDialog(ownerTree, copy, this.selectionPanel);
                                        //     }.bind(this), 100);
                                        // }
                                        data.records = [copy]; // assign the copy as the new dropNode
                                    }
                                }
                            } else {
                                // node has been moved inside right selection panel
                                var record = data.records[0];
                                var isOperator = record.data.isOperator;
                                var realOverModel = overModel;
                                if (dropPosition == "before" || dropPosition == "after") {
                                    realOverModel = overModel.parentNode;
                                }

                                if (isOperator || this.parentIsOperator(realOverModel)) {
                                    var attr = record.data;
                                    if (record.data.configAttributes) {
                                        // there is nothing to do, this guy has been configured already
                                        return;
                                        // attr = record.data.configAttributes;
                                    }
                                    var element = this.getConfigElement(attr);

                                    var copy = element.getCopyNode(record);
                                    data.records = [copy]; // assign the copy as the new dropNode

                                    this.openConfigDialog(element, copy);

                                    record.parentNode.removeChild(record);
                                }
                            }
                        }.bind(this),
                        drop: function (node, data, overModel) {
                            overModel.set('expandable', true);

                        }.bind(this),
                        nodedragover: function (targetNode, dropPosition, dragData, e, eOpts) {
                            var sourceNode = dragData.records[0];

                            if (sourceNode.data.isOperator) {
                                var realOverModel = targetNode;
                                if (dropPosition == "before" || dropPosition == "after") {
                                    realOverModel = realOverModel.parentNode;
                                }

                                var sourceType = this.getNodeTypeAndClass(sourceNode);
                                var targetType = this.getNodeTypeAndClass(realOverModel);
                                var allowed = true;


                                if (typeof realOverModel.data.isChildAllowed == "function") {
                                    allowed = allowed && realOverModel.data.isChildAllowed(realOverModel, sourceNode);
                                }

                                if (typeof sourceNode.data.isParentAllowed == "function") {
                                    allowed = allowed && sourceNode.data.isParentAllowed(realOverModel, sourceNode);
                                }


                                return allowed;
                            } else {
                                var targetNode = targetNode;

                                var allowed = true;
                                if (this.parentIsOperator(targetNode)) {
                                    if (dropPosition == "before" || dropPosition == "after") {
                                        targetNode = targetNode.parentNode;
                                    }

                                    if (typeof targetNode.data.isChildAllowed == "function") {
                                        allowed = allowed && targetNode.data.isChildAllowed(targetNode, sourceNode);
                                    }

                                    if (typeof sourceNode.data.isParentAllowed == "function") {
                                        allowed = allowed && sourceNode.data.isParentAllowed(targetNode, sourceNode);
                                    }

                                }

                                return allowed;
                            }
                        }.bind(this),
                        options: {
                            target: this.selectionPanel
                        }
                    }
                },
                id: 'tree',
                region: 'east',
                title: t('plugin_pimcore_datahub_configpanel_available_fields'),
                layout: 'fit',
                width: 640,
                split: true,
                autoScroll: true,
                rowLines: true,
                columnLines: true,
                listeners: {
                    itemcontextmenu: this.onTreeNodeContextmenu.bind(this)
                },
                columns: [
                    {
                        xtype: 'treecolumn',                    //this is so we know which column will show the tree
                        text: t('configuration'),
                        dataIndex: 'text',
                        flex: 90
                    }
                ]
            });

            var model = store.getModel();
            model.setProxy({
                type: 'memory'
            });
        }

        return this.selectionPanel;
    },

    parentIsOperator: function (record) {
        while (record) {
            if (record.data.isOperator) {
                return true;
            }
            record = record.parentNode;
        }
        return false;
    },

    getNodeTypeAndClass: function (node) {
        var type = "value";
        var className = "";
        if (node.data.configAttributes) {
            type = node.data.configAttributes.type;
            className = node.data.configAttributes['class'];
        } else if (node.data.dataType) {
            className = node.data.dataType.toLowerCase();
        }
        return {type: type, className: className};
    },

    onTreeNodeContextmenu: function (tree, record, item, index, e, eOpts) {
        e.stopEvent();

        tree.select();

        var menu = new Ext.menu.Menu();

        if (this.id != 0) {
            menu.add(new Ext.menu.Item({
                text: t('delete'),
                iconCls: "pimcore_icon_delete",
                handler: function (node) {
                    record.parentNode.removeChild(record, true);
                }.bind(this, record)
            }));

            if (record.data.children && record.data.children.length > 0) {
                menu.add(new Ext.menu.Item({
                    text: t('collapse_children'),
                    iconCls: "pimcore_icon_collapse_children",
                    handler: function (node) {
                        record.collapseChildren();
                    }.bind(this, record)
                }));

                menu.add(new Ext.menu.Item({
                    text: t('expand_children'),
                    iconCls: "pimcore_icon_expand_children",
                    handler: function (node) {
                        record.expandChildren();
                    }.bind(this, record)
                }));
            }

            if (record.data.isOperator) {
                menu.add(new Ext.menu.Item({
                    text: t('edit'),
                    iconCls: "pimcore_icon_edit",
                    handler: function (node) {
                        var nodeConfig = {
                            "isOperator": node.data.isOperator,
                            "attributes": node.data.configAttributes
                        }
                        this.getConfigElement(nodeConfig).getConfigDialog(node,
                            {
                                callback: function () {
                                    console.log("callback not needed for now");
                                }.bind(this)
                            });
                    }.bind(this, record)
                }));
            }
        }

        menu.showAt(e.pageX, e.pageY);
    },


    getClassDefinitionTreePanel: function () {
        if (!this.classDefinitionTreePanel) {

            var items = [];

            this.brickKeys = [];
            this.classDefinitionTreePanel = this.getClassTree("/admin/class/get-class-definition-for-column-config",
                this.generalConfig.classId, this.generalConfig.objectId);
        }

        return this.classDefinitionTreePanel;
    },

    getClassTree: function (url, classId, objectId) {

        var classTreeHelper = new pimcore.object.helpers.classTree(this.showFieldname, {
            showInvisible: true
        });
        var tree = classTreeHelper.getClassTree(url, classId, objectId);

        tree.addListener("itemdblclick", function (tree, record, item, index, e, eOpts) {
            if (!record.data.root && record.data.type != "layout" && record.data.dataType != 'localizedfields') {

                if (!this.checkSupported(record)) {
                    return;
                }

                var copy = Ext.apply({}, record.data);

                if (this.selectionPanel && !this.selectionPanel.getRootNode().findChild("key", record.data.key)) {
                    delete copy.id;
                    copy = this.selectionPanel.getRootNode().appendChild(copy);

                    var ownerTree = this.selectionPanel;

                    // TODO same as above regarding the core
                    // classificaton is stored on field level but on key level
                    // if (record.data.dataType == "classificationstore") {
                    //     var ccd = new pimcore.object.classificationstore.columnConfigDialog();
                    //     ccd.getConfigDialog(ownerTree, copy, this.selectionPanel);
                    // }
                }
            }
        }.bind(this));

        return tree;
    },

    getOperatorTrees: function () {
        var operators = pimcore.plugin.datahub[this.type + "operator"] ? Object.keys(pimcore.plugin.datahub[this.type + "operator"]) : [];
        var operatorGroups = [];

        for (var i = 0; i < operators.length; i++) {
            var operator = operators[i];

            if (operator == this.type + "operator") {
                continue;
            }

            if (!operator) {
                console.error("could not resolve operator");
                continue;
            }
            if (!this.availableOperators || this.availableOperators.indexOf(operator) >= 0) {
                var nodeConfig = pimcore.plugin.datahub[this.type + "operator"][operator].prototype;
                var configTreeNode = nodeConfig.getConfigTreeNode();

                var operatorGroup = nodeConfig.operatorGroup ? nodeConfig.operatorGroup : "other";

                if (!operatorGroups[operatorGroup]) {
                    operatorGroups[operatorGroup] = [];
                }

                var groupName = nodeConfig.group || "other";
                if (!operatorGroups[operatorGroup][groupName]) {
                    operatorGroups[operatorGroup][groupName] = [];
                }
                operatorGroups[operatorGroup][groupName].push(configTreeNode);
            }
        }

        var operatorGroupKeys = [];
        for (k in operatorGroups) {
            if (operatorGroups.hasOwnProperty(k)) {
                operatorGroupKeys.push(k);
            }
        }
        operatorGroupKeys.sort();
        var result = [];
        var len = operatorGroupKeys.length;
        for (i = 0; i < len; i++) {
            var operatorGroupName = operatorGroupKeys[i];
            var groupNodes = operatorGroups[operatorGroupName];
            result.push(this.getOperatorTree(operatorGroupName, groupNodes));

        }
        return result;
    },

    getOperatorTree: function (operatorGroupName, groups) {
        var groupKeys = [];
        for (k in groups) {
            if (groups.hasOwnProperty(k)) {
                groupKeys.push(k);
            }
        }

        groupKeys.sort();

        var len = groupKeys.length;

        var groupNodes = [];

        for (i = 0; i < len; i++) {
            var k = groupKeys[i];
            var childs = groups[k];
            childs.sort(
                function (x, y) {
                    return x.text < y.text ? -1 : 1;
                }
            );

            var groupNode = {
                iconCls: 'pimcore_icon_folder',
                text: t(k),
                allowDrag: false,
                allowDrop: false,
                leaf: false,
                expanded: true,
                children: childs
            };

            groupNodes.push(groupNode);
        }

        var tree = new Ext.tree.TreePanel({
            title: t('operator_group_' + operatorGroupName),
            iconCls: 'pimcore_icon_gridconfig_operator_' + operatorGroupName,
            xtype: "treepanel",
            region: "south",
            autoScroll: true,
            layout: 'fit',
            rootVisible: false,
            resizeable: true,
            split: true,
            viewConfig: {
                plugins: {
                    ptype: 'treeviewdragdrop',
                    ddGroup: "columnconfigelement",
                    enableDrag: true,
                    enableDrop: false
                }
            },
            root: {
                id: "0",
                root: true,
                text: t("base"),
                draggable: false,
                leaf: false,
                isTarget: false,
                children: groupNodes
            }
        });

        tree.addListener("itemdblclick", function (tree, record, item, index, e, eOpts) {
            var copy = Ext.apply({}, record.data);
            delete copy.id;
            var addedNode = this.selectionPanel.getRootNode().appendChild(copy);

            var attr = record.data;
            if (record.data.configAttributes) {
                attr = record.data.configAttributes;
            }

            var elementConfig = {
                "isOperator": true,
                "attributes": attr
            }

            var element = this.getConfigElement(elementConfig);
            this.openConfigDialog(element, addedNode);

        }.bind(this));

        return tree;
    },

    getConfigElement: function (configAttributes) {
        var element = null;
        var attributes = configAttributes.attributes;
        if (attributes && attributes.class && attributes.type) {
            var jsClass = attributes.class.toLowerCase();
            if (pimcore.plugin.datahub[this.type + attributes.type] && pimcore.plugin.datahub[this.type + attributes.type][jsClass]) {
                element = new pimcore.plugin.datahub[this.type + attributes.type][jsClass](this.generalConfig.classId);
            }
        } else {
            var dataType = configAttributes.dataType ? configAttributes.dataType.toLowerCase() : null;
            if (pimcore.plugin.datahub[this.type + "value"] && pimcore.plugin.datahub[this.type + "value"][dataType]) {
                element = new pimcore.plugin.datahub[this.type + "value"][dataType](this.generalConfig.classId);
            } else {
                element = new pimcore.plugin.datahub[this.type + "value"]["defaultvalue"](this.generalConfig.classId);
            }
        }
        return element;
    },

    checkSupported: function (record) {
        if (record.data.type == "data") {
            var dataType = record.data.dataType;
            if (dataType != "system" && !in_array(dataType, pimcore.plugin.datahub.graphql["supported" + ucfirst(this.type) + "DataTypes"])) {
                Ext.MessageBox.alert(t("error"), sprintf(t("plugin_pimcore_datahub_" + this.type) + " " + t('plugin_pimcore_datahub_datatype_not_supported_yet'), dataType));
                return false;
            }
        }
        return true;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.Abstract");

pimcore.plugin.datahub.Abstract = Class.create({
    type: null,
    class: null,
    objectClassId: null,
    allowedTypes: null,
    allowedParents: null,
    maxChildCount: null,

    initialize: function(classId) {
        this.objectClassId = classId;
    },

    getBaseTranslationKey: function () {
        var prefix = 'operator';

        if (this.mode == "mutation") {
            prefix = "mutation" + prefix;
        }

        return (
            this.type + "_" + this.defaultText.toLowerCase().replace(' ', '_'),
            prefix + "_" + this.defaultText.toLowerCase().replace(' ', '_')
        );
    },

    getDefaultText: function () {
        return t(this.getBaseTranslationKey());
    },

    getConfigTreeNode: function(configAttributes) {
        return {};
    },


    getCopyNode: function(source) {
        var copy = new Ext.tree.TreeNode({
            text: source.data.text,
            isTarget: true,
            leaf: true,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node, params) {
    },

    commitData: function() {
        this.window.close();
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.mutationvalue.defaultvalue");

pimcore.plugin.datahub.mutationvalue.defaultvalue = Class.create(pimcore.plugin.datahub.Abstract, {

    type: "value",
    class: "DefaultValue",

    getConfigTreeNode: function(configAttributes) {
        var node = {
            draggable: true,
            iconCls: "pimcore_icon_" + configAttributes.dataType,
            text: configAttributes.label,
            configAttributes: configAttributes,
            isTarget: true,
            leaf: true
        };

        return node;
    },

    getCopyNode: function(source) {

        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            dataType: source.data.dataType,
            qtip: source.data.key,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function(node, params) {
        return null;
    },

    commitData: function(params) {
        if(this.radiogroup.getValue().rb == "custom") {
            this.node.data.configAttributes.label = this.textfield.getValue();
            this.node.set('text', this.textfield.getValue());
        } else {
            this.node.data.configAttributes.label = this.node.get('text');
        }
        this.window.close();
        if (params && params.callback) {
            params.callback();
        }
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryvalue.defaultvalue");

pimcore.plugin.datahub.queryvalue.defaultvalue = Class.create(pimcore.plugin.datahub.Abstract, {

    type: "value",
    class: "DefaultValue",

    getConfigTreeNode: function(configAttributes) {
        var node = {
            draggable: true,
            iconCls: "pimcore_icon_" + configAttributes.dataType,
            text: configAttributes.label,
            configAttributes: configAttributes,
            isTarget: true,
            leaf: true
        };

        return node;
    },

    getCopyNode: function(source) {

        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            dataType: source.data.dataType,
            qtip: source.data.key,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function(node, params) {
        return null;
    },

    commitData: function(params) {
        if(this.radiogroup.getValue().rb == "custom") {
            this.node.data.configAttributes.label = this.textfield.getValue();
            this.node.set('text', this.textfield.getValue());
        } else {
            this.node.data.configAttributes.label = this.node.get('text');
        }
        this.window.close();
        if (params && params.callback) {
            params.callback();
        }
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryoperator.alias");

pimcore.plugin.datahub.queryoperator.alias = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "other",
    type: "operator",
    class: "Alias",
    iconCls: "plugin_pimcore_datahub_icon_alias",
    defaultText: "Alias",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label ? configAttributes.label : this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                expanded: true,
                leaf: false,
                expandable: false,
                allowChildren: true,
                isChildAllowed: this.allowChild
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class, label: this.getDefaultText()};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true,
                isChildAllowed: this.allowChild
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expanded: true,
            isOperator: true,
            isChildAllowed: this.allowChild,
            configAttributes: {
                label: source.data.configAttributes.label,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('attribute'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.set('isOperator', true);
        this.node.data.configAttributes.label = this.textField.getValue();
        this.node.set('text', this.textField.getValue());
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    },

    allowChild: function (targetNode, dropNode) {
        if (targetNode.childNodes.length > 0) {
            return false;
        }
        return true;
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryoperator.concatenator");

pimcore.plugin.datahub.queryoperator.concatenator = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "transformer",
    type: "operator",
    class: "Concatenator",
    iconCls: "pimcore_icon_operator_concatenator",
    defaultText: "Concatenator",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label,
                configAttributes: configAttributes,
                isTarget: true,
                allowChildren: true,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expandable: false,
            isOperator: true,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class
            }
        });

        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.glue = new Ext.form.TextField({
            fieldLabel: t('glue'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.glue
        });


        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textfield, this.glue],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 200,
            modal: true,
            title: this.getDefaultText(),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.data.configAttributes.label = this.textfield.getValue();
        this.node.set('text', this.textfield.getValue());
        this.node.set('isOperator', true);
        this.node.data.configAttributes.glue = this.glue.getValue();
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.queryoperator.dateformatter");

pimcore.plugin.datahub.queryoperator.dateformatter = Class.create(pimcore.plugin.datahub.Abstract, {

    operatorGroup: "formatter",
    type: "operator",
    class: "DateFormatter",
    iconCls: "pimcore_icon_datetime",
    defaultText: "DateFormatter",
    group: "other",

    getConfigTreeNode: function (configAttributes) {
        if (configAttributes) {
            var nodeLabel = this.getNodeLabel(configAttributes);
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: nodeLabel,
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                expanded: true,
                leaf: false,
                expandable: false,
                isChildAllowed: this.allowChild
            };
        } else {

            //For building up operator list
            var configAttributes = {type: this.type, class: this.class, label: this.getDefaultText()};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                leaf: true,
                isChildAllowed: this.allowChild
            };
        }
        node.isOperator = true;
        return node;
    },

    getCopyNode: function (source) {

        var copy = source.createNode({
            iconCls: source.data.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expandable: false,
            dataType: source.data.dataType,
            qtip: source.data.key,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class,
                attribute: source.data.key,
                dataType: source.data.dataType
            }
        });
        return copy;
    },

    getConfigDialog: function (node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.formatField = new Ext.form.TextField({
            label_width: 200,
            fieldLabel: t('date_format'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.format
        });

        var helpButton = new Ext.Button({
            text: t("help"),
            handler: function () {
                window.open("http://php.net/manual/en/function.date.php");
            },
            iconCls: "pimcore_icon_help"
        });


        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField, this.formatField, helpButton],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 500,
            height: 250,
            modal: true,
            title: t('settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function (params) {
        this.node.data.configAttributes.label = this.textField.getValue();
        this.node.data.configAttributes.format = this.formatField.getValue();
        this.node.set('isOperator', true);
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    },

    getNodeLabel: function (configAttributes) {
        var nodeLabel = configAttributes.label ? configAttributes.label : this.getDefaultText();
        if (configAttributes.format) {
            nodeLabel += '<span class="pimcore_gridnode_hint"> (' + configAttributes.format + ')</span>';
        }

        return nodeLabel;
    },

    allowChild: function (targetNode, dropNode) {
        if (targetNode.childNodes.length > 0) {
            return false;
        }
        return true;
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryoperator.elementcounter");

pimcore.plugin.datahub.queryoperator.elementcounter = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "transformer",
    type: "operator",
    class: "ElementCounter",
    iconCls: "pimcore_icon_operator_elementcounter",
    defaultText: "Element Counter",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label,
                configAttributes: configAttributes,
                isTarget: true,
                allowChildren: true,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expandable: false,
            isOperator: true,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class
            }
        });

        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.countEmptyField = new Ext.form.Checkbox({
            fieldLabel: t('count_empty'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.countEmpty
        });


        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField, this.countEmptyField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 200,
            modal: true,
            title: t('settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.data.configAttributes.label = this.textField.getValue();
        this.node.data.configAttributes.countEmpty = this.countEmptyField.getValue();
        this.node.set('text', this.textField.getValue());
        this.node.set('isOperator', true);
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.queryoperator.text");

pimcore.plugin.datahub.queryoperator.text = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "formatter",
    type: "operator",
    class: "Text",
    iconCls: "pimcore_icon_operator_text",
    defaultText: "Text",
    group: "string",


    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.textValue,
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: true,
            isOperator: true,
            configAttributes: {
                label: null,
                type: this.type,
                class: this.class
            }
        });

        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('text'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.textValue
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 160,
            modal: true,
            title: this.getDefaultText(),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.data.configAttributes.textValue = this.textField.getValue();
        this.node.data.configAttributes.label = this.textField.getValue();
        this.node.set('text', this.textField.getValue());
        this.node.set('isOperator', true);
        this.window.close();
        if (params && params.callback) {
            params.callback();
        }
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryoperator.merge");

pimcore.plugin.datahub.queryoperator.merge = Class.create(pimcore.plugin.datahub.Abstract, {
    type: "operator",
    class: "Merge",
    iconCls: "pimcore_icon_operator_merge",
    defaultText: "Merge",
    group: "other",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label ? configAttributes.label : this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                expanded: true,
                leaf: false,
                expandable: false,
                allowChildren: true,
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class, label: this.getDefaultText()};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.cssClass,
            isTarget: true,
            leaf: false,
            expanded: true,
            isOperator: true,
            configAttributes: {
                label: source.data.configAttributes.label,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('label'),
            labelWidth: 200,
            value: this.node.data.configAttributes.label
        });

        this.flattenField = new Ext.form.Checkbox({
            fieldLabel: t('flatten'),
            labelWidth: 200,
            value: this.node.data.configAttributes.flatten,
            hidden: true
        });

        this.uniqueField = new Ext.form.Checkbox({
            fieldLabel: t('unique'),
            labelWidth: 200,
            value: this.node.data.configAttributes.unique
        });


        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField, this.flattenField, this.uniqueField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: this.getDefaultText(),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.set('isOperator', true);
        this.node.data.configAttributes.label = this.textField.getValue();
        this.node.data.configAttributes.flatten = this.flattenField.getValue();
        this.node.data.configAttributes.unique = this.uniqueField.getValue();
        this.node.set('text', this.textField.getValue());
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    }

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryoperator.substring");

pimcore.plugin.datahub.queryoperator.substring = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "transformer",
    type: "operator",
    class: "Substring",
    iconCls: "pimcore_icon_operator_substring",
    defaultText: "Substring",
    group: "string",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label ? configAttributes.label : this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                expanded: true,
                leaf: false,
                expandable: false,
                allowChildren: true,
                isChildAllowed: this.allowChild
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class, label: this.getDefaultText()};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true,
                isChildAllowed: this.allowChild
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expanded: true,
            isOperator: true,
            isChildAllowed: this.allowChild,
            configAttributes: {
                label: source.data.configAttributes.label,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('plugin_pimcore_datahub_fieldName'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.startField = new Ext.form.NumberField({
            fieldLabel: t('start'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.start,
            minValue: 0
        });

        this.lengthField = new Ext.form.NumberField({
            fieldLabel: t('length'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.length
        });


        this.ellipsesField = new Ext.form.Checkbox({
            fieldLabel: t('ellipses'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.ellipses
        });


        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField, this.startField, this.lengthField, this.ellipsesField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('operator_substring_settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.set('isOperator', true);
        this.node.data.configAttributes.start = this.startField.getValue();
        this.node.data.configAttributes.length = this.lengthField.getValue();
        this.node.data.configAttributes.ellipses = this.ellipsesField.getValue();
        this.node.data.configAttributes.label = this.textField.getValue().replace(/ /g,"_");
        this.node.set('text', this.textField.getValue());
        this.window.close();
        if (params && params.callback) {
            params.callback();
        }
    },

    allowChild: function (targetNode, dropNode) {
        if (targetNode.childNodes.length > 0) {
            return false;
        }
        return true;
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryoperator.thumbnail");

pimcore.plugin.datahub.queryoperator.thumbnail = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "transformer",
    type: "operator",
    class: "Thumbnail",
    iconCls: "pimcore_icon_thumbnails",
    defaultText: "Thumbnail",

    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label ? configAttributes.label : this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                expanded: true,
                leaf: false,
                expandable: false,
                allowChildren: true,
                isChildAllowed: this.allowChild
            };
        } else {

            //For building up operator list
            var configAttributes = { type: this.type, class: this.class, label: this.getDefaultText()};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true,
                isChildAllowed: this.allowChild
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expanded: true,
            isOperator: true,
            isChildAllowed: this.allowChild,
            configAttributes: {
                label: source.data.configAttributes.label,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('attribute'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });


        this.thumbnailConfigField = new Ext.form.ComboBox({
            width: 500,
            autoSelect: true,
            valueField: "id",
            displayField: "id",
            value: this.node.data.configAttributes.thumbnailConfig,
            fieldLabel: t("thumbnail"),
            store: new Ext.data.Store({
                autoDestroy: true,
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: '/admin/pimcoredatahub/config/thumbnail-tree',
                    reader: {
                        type: 'json'
                    }
                },
                listeners: {
                    load: function() {
                        this.thumbnailConfigField.setValue(this.node.data.configAttributes.thumbnailConfig);
                    }.bind(this)
                },
                fields: ['id']
            }),
            triggerAction: "all"
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField, this.thumbnailConfigField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.set('isOperator', true);
        this.node.data.configAttributes.label = this.textField.getValue();
        this.node.data.configAttributes.thumbnailConfig = this.thumbnailConfigField.getValue();
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    },

    allowChild: function (targetNode, dropNode) {
        if (targetNode.childNodes.length > 0) {
            return false;
        }
        return true;
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.queryoperator.thumbnailhtml");

pimcore.plugin.datahub.queryoperator.thumbnailhtml = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "transformer",
    type: "operator",
    class: "ThumbnailHtml",
    iconCls: "pimcore_icon_thumbnails",
    defaultText: "Thumbnail HTML",
    group: "other",

    getConfigTreeNode: function(configAttributes) {
        if (configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label ? configAttributes.label : this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                expanded: true,
                leaf: false,
                expandable: false,
                allowChildren: true,
                isChildAllowed: this.allowChild
            };
        } else {
            //For building up operator list
            var configAttributes = { type: this.type, class: this.class, label: this.getDefaultText() };

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true,
                isChildAllowed: this.allowChild
            };
        }
        node.isOperator = true;

        return node;
    },

    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expanded: true,
            isOperator: true,
            isChildAllowed: this.allowChild,
            configAttributes: {
                label: source.data.configAttributes.label,
                type: this.type,
                class: this.class
            }
        });

        return copy;
    },

    getConfigDialog: function(node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('attribute'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.thumbnailHtmlConfigField = new Ext.form.ComboBox({
            width: 500,
            autoSelect: true,
            valueField: "id",
            displayField: "id",
            value: this.node.data.configAttributes.thumbnailHtmlConfig,
            fieldLabel: t("thumbnail"),
            store: new Ext.data.Store({
                autoDestroy: true,
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: '/admin/settings/thumbnail-tree',
                    reader: {
                        type: 'json'
                    }
                },
                listeners: {
                    load: function() {
                        this.thumbnailHtmlConfigField.setValue(this.node.data.configAttributes.thumbnailHtmlConfig);
                    }.bind(this)
                },
                fields: ['id']
            }),
            triggerAction: "all"
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField, this.thumbnailHtmlConfigField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('settings'),
            layout: "fit",
            items: [this.configPanel]
        });
        this.window.show();

        return this.window;
    },

    commitData: function(params) {
        this.node.set('isOperator', true);
        this.node.data.configAttributes.label = this.textField.getValue();
        this.node.data.configAttributes.thumbnailHtmlConfig = this.thumbnailHtmlConfigField.getValue();
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    },

    allowChild: function (targetNode, dropNode) {
        if (targetNode.childNodes.length > 0) {
            return false;
        }

        return true;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.queryoperator.translatevalue");

pimcore.plugin.datahub.queryoperator.translatevalue = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "transformer",
    type: "operator",
    class: "TranslateValue",
    iconCls: "pimcore_icon_localizedfields",
    defaultText: "Translate Value",
    group: "string",


    getConfigTreeNode: function(configAttributes) {
        if(configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label ? configAttributes.label : this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {
            //For building up operator list
            var configAttributes = { type: this.type, class: this.class, label: this.getDefaultText()};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                maxChildCount: 1,
                leaf: true
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function(source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.cssClass,
            isTarget: true,
            leaf: false,
            maxChildCount: 1,
            expanded: true,
            expandable: false,
            isOperator: true,
            configAttributes: {
                label: source.data.configAttributes.label,
                type: this.type,
                class: this.class
            }
        });
        return copy;
    },


    getConfigDialog: function(node, params) {
        this.node = node;

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.prefix = new Ext.form.TextField({
            fieldLabel: t('prefix'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.prefix
        });



        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textfield, this.prefix],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 350,
            modal: true,
            title: t('settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function(params) {
        this.node.data.configAttributes.label = this.textfield.getValue();
        this.node.data.configAttributes.prefix = this.prefix.getValue();
        this.node.set('text', this.textfield.getValue());
        this.node.set('isOperator', true);
        this.window.close();
        if (params && params.callback) {
            params.callback();
        }
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.queryoperator.trimmer");

pimcore.plugin.datahub.queryoperator.trimmer = Class.create(pimcore.plugin.datahub.Abstract, {
    operatorGroup: "transformer",
    type: "operator",
    class: "Trimmer",
    iconCls: "pimcore_icon_operator_trimmer",
    defaultText: "Trimmer",
    group: "string",

    getConfigTreeNode: function (configAttributes) {
        if (configAttributes) {
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: configAttributes.label,
                configAttributes: configAttributes,
                isTarget: true,
                allowChildren: true,
                expanded: true,
                leaf: false,
                expandable: false,
                isChildAllowed: this.allowChild
            };
        } else {

            //For building up operator list
            var configAttributes = {type: this.type, class: this.class, trim: 0};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true,
                isChildAllowed: this.allowChild
            };
        }
        node.isOperator = true;
        return node;
    },


    getCopyNode: function (source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expandable: false,
            isOperator: true,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class

            },
            isChildAllowed: this.allowChild
        });

        return copy;
    },


    getConfigDialog: function (node, params) {
        this.node = node;

        this.textfield = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        var trim = this.node.data.configAttributes.trim;

        this.trimField = new Ext.form.RadioGroup({
            xtype: 'radiogroup',
            fieldLabel: t('trim'),
            border: true,
            columns: 1,
            vertical: true,
            items: [
                {boxLabel: t('left'), name: 'rb', inputValue: '1', checked: trim == 1},
                {boxLabel: t('right'), name: 'rb', inputValue: '2', checked: trim == 2},
                {boxLabel: t('both'), name: 'rb', inputValue: '2', checked: trim == 3},
                {boxLabel: t('disabled'), name: 'rb', inputValue: '0', checked: isNaN(trim) || trim == 0}
            ]
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textfield, this.trimField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 300,
            modal: true,
            title: t('settings'),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();
        return this.window;
    },

    commitData: function (params) {
        this.node.data.configAttributes.label = this.textfield.getValue();
        this.node.set('text', this.textfield.getValue());
        this.node.set('isOperator', true);

        this.node.data.configAttributes.trim = parseInt(this.trimField.getValue().rb);
        this.window.close();
        if (params && params.callback) {
            params.callback();
        }
    },

    allowChild: function (targetNode, dropNode) {
        if (targetNode.childNodes.length > 0) {
            return false;
        }
        return true;
    }
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.mutationoperator.mutationoperator");

pimcore.plugin.datahub.mutationoperator.mutationoperator = Class.create(pimcore.plugin.datahub.Abstract, {
    type: "operator",
    class: null,
    iconCls: null,
    defaultText: null,
    hasTooltip: false,
    group: null,
    mode: "mutation",

    getConfigTreeNode: function (configAttributes) {
        if (configAttributes) {
            var nodeLabel = this.getNodeLabel(configAttributes);
            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: nodeLabel,
                configAttributes: configAttributes,
                isTarget: true,
                isChildAllowed: this.allowChild,
                expanded: true,
                leaf: false,
                expandable: false
            };
        } else {
            // For building up operator list in left-panel
            var configAttributes = {type: this.type, class: this.class};

            var node = {
                draggable: true,
                iconCls: this.iconCls,
                text: this.getDefaultText(),
                configAttributes: configAttributes,
                isTarget: true,
                leaf: true,
                isChildAllowed: this.allowChild
            };

            if (this.hasTooltip) {
                node.qtip = t(this.getBaseTranslationKey() + '_description');
            }
        }

        node.isOperator = true;

        return node;
    },

    getCopyNode: function (source) {
        var copy = source.createNode({
            iconCls: this.iconCls,
            text: source.data.text,
            isTarget: true,
            leaf: false,
            expandable: false,
            isOperator: true,
            isChildAllowed: this.allowChild,
            configAttributes: {
                label: source.data.text,
                type: this.type,
                class: this.class
            }
        });

        return copy;
    },

    getConfigDialog: function (node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 200,
            modal: true,
            title: this.getDefaultText(),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();

        return this.window;
    },

    commitData: function (params) {
        this.node.data.configAttributes.label = this.textField.getValue();

        var nodeLabel = this.getNodeLabel(this.node.data.configAttributes);
        this.node.set('text', nodeLabel);
        this.node.set('isOperator', true);
        this.window.close();

        if (params && params.callback) {
            params.callback();
        }
    },

    allowChild: function (targetNode, dropNode) {
        return !targetNode.childNodes.length > 0;
    },

    getNodeLabel: function (configAttributes) {
        return configAttributes.label;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.mutationoperator.ifempty");

pimcore.plugin.datahub.mutationoperator.ifempty = Class.create(pimcore.plugin.datahub.mutationoperator.mutationoperator, {
    class: "IfEmpty",
    iconCls: "plugin_pimcore_datahub_icon_ifempty",
    defaultText: "IfEmpty",
    group: "other",
    hasTooltip: true
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.mutationoperator.localeswitcher");

pimcore.plugin.datahub.mutationoperator.localeswitcher = Class.create(pimcore.plugin.datahub.mutationoperator.mutationoperator, {
    class: "LocaleSwitcher",
    iconCls: "pimcore_icon_operator_localeswitcher",
    defaultText: "Locale Switcher",
    group: "other",
    hasTooltip: true,

    getConfigDialog: function (node, params) {
        this.node = node;

        this.textField = new Ext.form.TextField({
            fieldLabel: t('label'),
            length: 255,
            width: 200,
            value: this.node.data.configAttributes.label
        });

        var data = [];
        for (var i = 0; i < pimcore.settings.websiteLanguages.length; i++) {
            var language = pimcore.settings.websiteLanguages[i];
            data.push([language, t(pimcore.available_languages[language])]);
        }

        var store = new Ext.data.ArrayStore({
                fields: ["key", "value"],
                data: data
            }
        );

        var options = {
            fieldLabel: t('locale'),
            triggerAction: "all",
            editable: true,
            selectOnFocus: true,
            queryMode: 'local',
            typeAhead: true,
            forceSelection: true,
            store: store,
            componentCls: "object_field",
            mode: "local",
            width: 200,
            padding: 10,
            displayField: "value",
            valueField: "key",
            value: this.node.data.configAttributes.locale
        };

        this.localeField = new Ext.form.ComboBox(options);

        this.configPanel = new Ext.Panel({
            layout: "form",
            bodyStyle: "padding: 10px;",
            items: [this.textField, this.localeField],
            buttons: [{
                text: t("apply"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    this.commitData(params);
                }.bind(this)
            }]
        });

        this.window = new Ext.Window({
            width: 400,
            height: 200,
            modal: true,
            title: this.getDefaultText(),
            layout: "fit",
            items: [this.configPanel]
        });

        this.window.show();

        return this.window;
    },

    commitData: function ($super, params) {
        this.node.data.configAttributes.locale = this.localeField.getValue();

        $super(params);
    },

    getNodeLabel: function(configAttributes) {
        var nodeLabel = configAttributes.label;

        if (configAttributes.locale) {
            nodeLabel += '<span class="pimcore_gridnode_hint"> (' + configAttributes.locale + ')</span>';
        }

        return nodeLabel;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Object
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

pimcore.registerNS("pimcore.plugin.datahub.mutationoperator.localecollector");

pimcore.plugin.datahub.mutationoperator.localecollector = Class.create(pimcore.plugin.datahub.mutationoperator.mutationoperator, {
    class: "LocaleCollector",
    iconCls: "plugin_pimcore_datahub_icon_localecollector",
    defaultText: "Locale Collector",
    group: "other",
    hasTooltip: true,

    allowChild: function (targetNode, dropNode) {
        return (
            !targetNode.childNodes.length > 0
            && in_array(dropNode.data.dataType, [
                "booleanSelect",
                "checkbox",
                "country",
                "countrymultiselect",
                "date",
                "datetime",
                "email",
                "externalImage",
                "geopoint",
                "firstname",
                "gender",
                "input",
                "image",
                "language",
                "lastname",
                "newsletterActive",
                "manyToOneRelation",
                "multiselect",
                "newsletterConfirmed",
                "numeric",
                "select",
                "slider",
                "textarea",
                "time",
                "wysiwyg"
            ])
        );
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.workspace.abstract");
pimcore.plugin.datahub.workspace.abstract = Class.create({

    availableRights : ["create", "read","update", "delete"],

    initialize: function (parent) {
        this.parent = parent;
        this.workspaces = this.parent.data.workspaces;
    },

    getPanel: function () {

        var gridPlugins = [];
        var storeFields = ["cpath"];

        var typesColumns = [
            {text: t("path"), flex: 1, sortable: false, dataIndex: 'cpath',
                editor: new Ext.form.TextField({}),
                tdCls: "pimcore_property_droptarget",
                renderer: Ext.util.Format.htmlEncode
            }
        ];

        var check;
        for (var i=0; i<this.availableRights.length; i++) {

            var checkConfig = {
                text: t("plugin_pimcore_datahub_workspace_permission_" + this.availableRights[i]),
                dataIndex: this.availableRights[i],
                width: 70,
                hidden: this.rightCheckboxHidden || false,
                disabled: this. rightCheckboxDisabled || false
            };

            check = new Ext.grid.column.Check(checkConfig);

            typesColumns.push(check);
            gridPlugins.push(check);

            // store fields
            storeFields.push({name:this.availableRights[i], type: 'bool'});
        }

        typesColumns.push({
            xtype: 'actioncolumn',
            menuText: t('delete'),
            width: 40,
            items: [{
                tooltip: t('delete'),
                icon: "/bundles/pimcoreadmin/img/flat-color-icons/delete.svg",
                handler: function (grid, rowIndex) {
                    grid.getStore().removeAt(rowIndex);
                    this.updateRows();
                }.bind(this)
            }]
        });

        this.store = new Ext.data.JsonStore({
            autoDestroy: true,
            proxy: {
                type: 'memory',
                reader: {
                    rootProperty: this.type
                }
            },
            fields: storeFields,
            data: this.workspaces
        });

        this.cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });

        this.grid = Ext.create('Ext.grid.Panel', {
            frame: false,
            autoScroll: true,
            store: this.store,
            columns : typesColumns,
            trackMouseOver: true,
            columnLines: true,
            stripeRows: true,
            autoExpandColumn: "cpath",
            autoHeight: true,
            style: "margin-bottom:20px;",
            plugins: [
                this.cellEditing
            ],
            tbar: [
                {
                    xtype: "tbtext",
                    text: "<b>" + t(this.type + "s") + "</b>"
                },
                "-","-",
                {
                    iconCls: "pimcore_icon_add",
                    text: t("add"),
                    handler: this.onAdd.bind(this)
                }
            ],
            viewConfig: {
                forceFit: true,
                listeners: {
                    rowupdated: this.updateRows.bind(this),
                    refresh: this.updateRows.bind(this)
                }
            }
        });

        this.store.on("update", this.updateRows.bind(this));
        this.grid.on("viewready", this.updateRows.bind(this));


        return this.grid;
    },

    updateRows: function () {

        var rows = Ext.get(this.grid.getEl().dom).query(".x-grid-row");

        for (var i = 0; i < rows.length; i++) {

            var dd = new Ext.dd.DropZone(rows[i], {
                ddGroup: "element",

                getTargetFromEvent: function(e) {
                    return this.getEl();
                },

                onNodeOver : function(target, dd, e, data) {
                    if (data.records.length == 1 && data.records[0].data.elementType == this.type) {
                        return Ext.dd.DropZone.prototype.dropAllowed;
                    }
                }.bind(this),

                onNodeDrop : function(myRowIndex, target, dd, e, data) {
                    if (pimcore.helpers.dragAndDropValidateSingleItem(data)) {
                        try {
                            var record = data.records[0];
                            var data = record.data;

                            // check for duplicate records
                            var index = this.grid.getStore().findExact("cpath", data.path);
                            if (index >= 0) {
                                return false;
                            }

                            if (data.elementType != this.type) {
                                return false;
                            }

                            var rec = this.grid.getStore().getAt(myRowIndex);
                            rec.set("cpath", data.path);

                            this.updateRows();

                            return true;
                        } catch (e) {
                            console.log(e);
                        }
                    }
                }.bind(this, i)
            });
        }

    },

    onAdd: function (btn, ev) {
        this.grid.store.add({
            read: true,
            cpath: ""
        });

        this.updateRows();
    },

    getValues: function () {

        var values = [];
        this.store.commitChanges();

        var records = this.store.getRange();
        for (var i = 0; i < records.length; i++) {
            var currentData = records[i];
            if (currentData) {
                values.push(currentData.data);
            }
        }

        return values;
    }
});



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.workspace.document");
pimcore.plugin.datahub.workspace.document = Class.create(pimcore.plugin.datahub.workspace.abstract, {


    type: "document"

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.workspace.asset");
pimcore.plugin.datahub.workspace.asset = Class.create(pimcore.plugin.datahub.workspace.abstract, {


    type: "asset"

});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.datahub.workspace.object");
pimcore.plugin.datahub.workspace.object = Class.create(pimcore.plugin.datahub.workspace.abstract, {

    type: "object"
});


/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.objectmerger");

pimcore.plugin.objectmerger = Class.create(pimcore.plugin.admin,{


    getClassName: function (){
        return "pimcore.plugin.objectmerger";
    },

    initialize: function(){
        pimcore.plugin.broker.registerPlugin(this);
    },

    uninstall: function(){

    },

    pimcoreReady: function (params,broker) {
        var extrasMenu = pimcore.globalmanager.get("layout_toolbar").extrasMenu;

        if (extrasMenu) {
            extrasMenu.add({
                text: t("plugin_objectmerger_compare"),
                iconCls: "plugin_objectmerger_nav_icon_compare",
                handler:  this.showObjectSelectionDialog.bind(this)
            });
        }
    },


    showDiff: function(response) {
        var data = Ext.decode(response.responseText);

        if (data.success) {
            this.selectionDialog.close();
            pimcore.globalmanager.add("plugin_objectmerger", new pimcore.plugin.objectmerger.panel(data.oid1, data.oid2));
        } else {
            Ext.MessageBox.show({
                title:t('error'),
                msg: t('plugin_objectmerger_no_object'),
                buttons: Ext.Msg.OK,
                icon: Ext.MessageBox.ERROR
            });
        }
    },

    showObjectSelectionDialog: function() {

        this.selectionDialog = new Ext.Window({
            modal: false,
            autoHeight: true,
            title: t('plugin_objectmerger_compare'),
            closeAction: 'close',
            width: 700
        });


        this.textField1 = new Ext.form.TextField({
            emptyText: t("plugin_objectmerger_path"),
            width: 500
        });


        this.textField2 = new Ext.form.TextField({
            emptyText: t("plugin_objectmerger_path"),
            width: 500
        });


        var form = new Ext.form.FormPanel({
            bodyStyle: 'padding: 10px;',

            items: [
                {
                    xtype: 'fieldcontainer',
                    layout: 'hbox',
                    fieldLabel: t("plugin_objectmerger_object1"),
                    items: [
                        {
                            xtype: "button",
                            iconCls: "pimcore_icon_search",
                            handler: this.searchForObject.bind(this, 1)
                        }, this.textField1
                    ]
                },
                {
                    xtype: 'fieldcontainer',
                    layout: 'hbox',
                    fieldLabel: t("plugin_objectmerger_object2"),
                    items: [
                        {
                            xtype: "button",
                            iconCls: "pimcore_icon_search",
                            handler: this.searchForObject.bind(this, 2)
                        }, this.textField2
                    ]
                }
            ],

            bbar: [{
                xtype: "button",
                text: t("cancel"),
                iconCls: "pimcore_icon_cancel",
                handler: function () {
                    this.selectionDialog.close();
                }.bind(this)
            },{
                xtype: "button",
                text: t("plugin_objectmerger_btn_compare"),
                iconCls: "pimcore_icon_apply",
                handler: function () {
                    Ext.Ajax.request({
                        url: "/admin/elementsobjectmerger/admin/getid",
                        method: "post",
                        params: {
                            path1: this.textField1.getValue(),
                            path2: this.textField2.getValue()
                        },
                        success: this.showDiff.bind(this)
                    });

                }.bind(this)
            }]
        });


        var afterRenderHandler = function(fieldPath, el){
            // add drop zone
            new Ext.dd.DropZone(el.getEl(), {
                reference: this,
                ddGroup: "element",
                getTargetFromEvent: function (e) {
                    return fieldPath.getEl();
                },

                onNodeOver: function (target, dd, e, data) {
                    var data = data.records[0].data;

                    if (data.elementType == "object" && data.type != "folder") {
                        return Ext.dd.DropZone.prototype.dropAllowed;
                    }

                    return Ext.dd.DropZone.prototype.dropNotAllowed;
                }.bind(this),

                onNodeDrop: function (target, dd, e, data) {
                    var data = data.records[0].data;

                    if (data.elementType == "object" && data.type != "folder") {
                        fieldPath.setValue(data.path);
                        return true;
                    }
                    return false;
                }.bind(this)
            });
        }.bind(this);

        this.textField1.on("render", afterRenderHandler.bind(this, this.textField1));
        this.textField2.on("render", afterRenderHandler.bind(this, this.textField2));

        this.selectionDialog.add(form);
        this.selectionDialog.show();
    },

    addDataFromSelector: function (objectIndex, item) {
        if (item) {
            this["textField" + objectIndex].setValue(item.fullpath);
        }
    },


    searchForObject: function(objectIndex) {
        pimcore.helpers.itemselector(false, this.addDataFromSelector.bind(this, objectIndex), {
            type: ["object"]
        });
    }
});

new pimcore.plugin.objectmerger();



/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.objectmerger.panel");
pimcore.plugin.objectmerger.panel = Class.create({

    changeCount: 0,

    initialize: function (oid1, oid2) {
        this.id = oid1 + "_" + oid2;
        this.oid1 = oid1;
        this.oid2 = oid2;
        this.getTabPanel();
    },

    activate: function () {
        var tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.setActiveItem("pimcore_plugin_objectmerger_panel_" + this.id);
    },


    save: function () {
        var resultdataCopy = Ext.decode(Ext.encode(this.resultData));

        for (var key in resultdataCopy) {
            if (resultdataCopy.hasOwnProperty(key)) {
                var item = resultdataCopy[key];
                var value = item.value;
                if (value && value["type"] == "grid") {
                    // filter out nonselected stuff
                    var data = item.data;
                    var i;
                    for (i = 0, len = data.length; i < len; i++) {
                        var itemData = data[i];

                        if (!itemData["__selected"]) {
                            data.splice(i, 1);
                            i--;
                            len--;
                        }
                    }
                }
            }
        }

        Ext.Ajax.request({
            url: "/admin/elementsobjectmerger/admin/save",
            method: "post",
            params: {
                id: this.oid2,
                sourceId: this.oid1,
                attributes: Ext.encode(resultdataCopy)
            },
            success: this.saveComplete.bind(this)
        });
    },

    toggle: function () {
        this.panel.close();
        new pimcore.plugin.objectmerger.panel(this.oid2, this.oid1);
    },

    getTabPanel: function () {

        if (!this.panel) {
            this.panel = new Ext.form.FormPanel({
                bodyCls: "diffpanel",
                layout: "fit",
                title: t("plugin_objectmerger_diff") + " " + this.oid1 + " - " + this.oid2,
                closable: true,
                items: [],
                buttons: [
                    {
                        text: t("plugin_objectmerger_mirror"),
                        iconCls: "plugin_objectmerger_icon_mirror",
                        handler: this.toggle.bind(this)
                    },
                    {
                        text: t("save"),
                        iconCls: "pimcore_icon_apply",
                        handler: this.save.bind(this)
                    }
                ],
                id: "pimcore_plugin_objectmerger_panel_" + this.id,
                iconCls: "plugin_objectmerger_icon_compare"
            });

            var tabPanel = Ext.getCmp("pimcore_panel_tabs");
            tabPanel.add(this.panel);
            tabPanel.setActiveItem("pimcore_plugin_objectmerger_panel_" + this.id);

            this.panel.on("destroy", function () {
                pimcore.globalmanager.remove("plugin_objectmerger_" + this.id);
                var accordion = Ext.getCmp("pimcore_panel_tree_left");
                accordion.expand();
            }.bind(this));

            pimcore.layout.refresh();
        }

        Ext.Ajax.request({
            url: "/admin/elementsobjectmerger/admin/diff",
            method: "post",
            params: {
                id1: this.oid1,
                id2: this.oid2
            },
            success: this.showDiff.bind(this)
        });

        return this.panel;

    },

    prependStyle: function (html) {
        var css = "<style type=\"text/css\">"
            + "tr {"
            + "background-color:#000000;"
            + "color:#E0E0E0"
            + "}"
            + " th {"
            + "background-color: #ccf;"
            + "color: #000;"
            + "font-size: x-small;"
            + "}"
            + "td {"
            + "border-right: 1px solid #C1DAD7;"
            + "border-bottom: 1px solid #C1DAD7;"
            + "background-color: #ccc;"
            + "color: #333;"
            + "font-size: x-small;"
            + "}"
            + "</style>";

        html = css + html;
        return html;
    },


    replaceImage: function (panel, src) {

        valuePreview = new Ext.Component({
            isFormField: true,
            autoEl: {
                id: Ext.id(),
                tag: 'img',
                src: src
            },
            isValid: function () {
                return true;
            },
            isDirty: function () {
                return false;
            }
        });

        panel.removeAll();
        panel.add(valuePreview);
        panel.updateLayout();
    },

    buildFromValue: function (value, type) {
        var valuePreview;
        if (type) {

            if (type == "img") {

                var theValue;
                if (value) {
                    theValue = value.src;
                }
                var parentPanel = new Ext.Panel({
                    width: 450,
                    height: 150,
                    border: true,
                    bodyCls: "diffpanel_preview"
                });
                this.replaceImage(parentPanel, theValue);

                valuePreview = parentPanel;
            } else if (type == "html" || type == "grid") {
                var theValue;
                if (value) {
                    theValue = this.prependStyle(value.html);
                }

                var valuePreview = new Ext.Panel({
                    width: 450,
                    // height: 150,
                    autoScroll: true,
                    border: true,
                    bodyCls: "diffpanel_preview",
                    html: theValue
                });

            } else {
                valuePreview = new Ext.form.TextField({
                    width: 450,
                    value: "Unsupported type",
                    disabled: true,
                    border: true,
                    fieldStyle: "border-color: #FFd0d0"
                });
            }
        } else {
            if (value == null || typeof value == "undefined") {
                value = "[undefined]";
            }
            valuePreview = new Ext.form.TextField({
                width: 450,
                value: value,
                disabled: true,
                fieldStyle: "border-color: #FFd0d0"
            });
        }

        return valuePreview;
    },

    panelActivated: function (language, thePanel) {
        thePanel.removeAll();

        var items = this.data.items;
        for (var i = -1; i < items.length; i++) {

            var item;
            if (i >= 0) {
                item = items[i];

                if (item.lang && item.lang != language) {
                    continue;
                }

                var style = {};
                if (item.lang) {
                    style.fontWeight = "bold";
                }

                var statusStyle = {};
                statusStyle.color = "orange";
                statusStyle.fontWeight = "bold";
            }


            var rightValue;
            var leftValue;

            var changed = false;

            if (item) {
                leftValue = item.value;

                if (this.resultData[item.key]) {
                    rightValue = this.resultData[item.key].value;
                    changed = this.resultData[item.key].changed;
                } else {
                    rightValue = item.value2;
                }

                var theType = null;
                if (item.value && item.value.type) {
                    theType = item.value.type;
                } else if (item.value2 && item.value2.type) {
                    theType = item.value2.type;
                }
                var statusText = "";
                if (item.isdiff && !changed) {
                    statusText = "!!!";
                }
                var niceName = item.title;

            } else {
                leftValue = this.data.o1path + " (id:" + this.data.o1id + ")";
                rightValue = this.data.o2path + " (id:" + this.data.o2id + ")";
            }

            var statusPanel = new Ext.form.Label({
                width: 16,
                border: false,
                style: statusStyle,
                text: statusText
            });


            var label = new Ext.form.Label({
                width: 250,
                text: niceName,
                style: style
            });


            //TODO optimize this, build a mapping table at loading time and reuse the values.
            var iconClass = null;
            var typeName = null;
            var isDisabled = true;
            var handler = null;

            if (item) {
                isDisabled = item.disabled;
                if (item.type) {
                    iconClass = this.executeFunctionByName("pimcore.object.classes.data." + item.type + ".prototype.getIconClass", window);
                    typeName = this.executeFunctionByName("pimcore.object.classes.data." + item.type + ".prototype.getTypeName", window);
                }
            } else {
                typeName = t("plugin_objectmerger_go");
                iconClass = "pimcore_icon_edit";
                handler = pimcore.helpers.openObject.bind(this, this.data.o1id, "object");
            }

            var datatype = new Ext.Button({
                iconCls: iconClass,
                disabled: (i >= 0),
                tooltip: typeName,
                handler: handler
            });

            if (leftValue && leftValue["type"] == "grid") {
                leftValue = this.buildGridDataPreview(item.data, false);
                theType = "grid";
            }

            if (rightValue && rightValue["type"] == "grid") {
                rightValue = this.buildGridDataPreview(item.data2, true);
                theType = "grid";
            }


            var leftPreview = this.buildFromValue(leftValue, theType);
            var rightPreview = this.buildFromValue(rightValue, theType);

            var icon = null;
            var btnText = null;
            var hasHandler = false;

            if (item) {

                if (isDisabled) {
                    iconCls = "plugin_objectmerger_icon_lock";
                    btnText = t("plugin_objectmerger_copy_disabled");
                } else {
                    if (item.isdiff) {
                        hasHandler = true;
                        if (changed) {
                            iconCls = "plugin_objectmerger_icon_revert";
                            btnText = t("plugin_objectmerger_revert");
                        } else {
                            iconCls = "plugin_objectmerger_icon_arrow_right";
                            btnText = t("plugin_objectmerger_copy");
                        }
                    } else {
                        iconCls = "plugin_objectmerger_icon_gray_arrow";
                        btnText = t("plugin_objectmerger_equal");
                    }
                }
            } else {
                typeName = t("plugin_objectmerger_go");
                iconCls = "pimcore_icon_edit";
                isDisabled = false;
                btnText = t("plugin_objectmerger_go");
                hasHandler = true;
            }

            var applyButton = new Ext.Button({
                style: 'margin-left: 10px;',
                iconCls: iconCls,
                disabled: isDisabled,
                tooltip: btnText
            });

            var advancedButton = null;


            var gridHandlerCallback = function (item, rightPreview, language, thePanel, statusPanel, applyButton, fromEditor, injectedData) {
                applyButton.apply = true;
                this.applyData(item, rightPreview, language, thePanel, statusPanel, applyButton, fromEditor, injectedData);
            }.bind(this, item, rightPreview, language, thePanel, statusPanel, applyButton, true);

            var gridHandler = function (item, callback) {

                var itemData = this.resultData[item.key];
                var window = new pimcore.plugin.objectmerger.grideditor(item, itemData, callback);
                window.show();
            }.bind(this, item, gridHandlerCallback);


            if (theType == "grid" && (item.data || item.data2)) {
                advancedButton = new Ext.Button({
                    style: 'margin-left: 10px;',
                    iconCls: "plugin_objectmerger_icon_advanced",
                    tooltip: t("advanced"),

                    handler: gridHandler
                });
            }

            if (hasHandler) {
                if (item && item.isdiff) {
                    applyButton.setHandler(this.applyData.bind(this, item, rightPreview, language, thePanel, statusPanel, applyButton, false, null));
                } else {
                    applyButton.setHandler(pimcore.helpers.openObject.bind(this, this.data.o2id, "object"));
                }
            }

            applyButton.apply = true;

            var style;
            if (i < 0) {
                style = 'margin-bottom: 30px;';
            }

            if (advancedButton) {
                var actionItems = {
                    xtype: "panel",
                    layout: "vbox",
                    items: [applyButton, advancedButton],
                    style: 'padding: 0px; margin: 0px',
                    border: false
                }
            } else {
                actionItems = applyButton;
            }

            var fieldSet = new Ext.form.FieldContainer({
                layout: 'hbox',
                border: false,
                labelWidth: 0,
                disabled: isDisabled,
                style: style,
                items: [
                    statusPanel,
                    label,
                    datatype,
                    leftPreview,
                    actionItems,
                    rightPreview
                ],
            });

            thePanel.add(fieldSet);
        }
        thePanel.updateLayout();

    },

    buildGridDataPreview: function (data, respectSelection) {
        var value = [];

        if (data && data.length > 0) {
            var i;

            for (i = 0; i < data.length; i++) {
                var item = data[i];
                if (respectSelection && !item["__selected"]) {
                    continue;
                }
                value.push(item["title"]);
            }
        }

        value = value.join("<br>");
        var result = {
            type: "grid",
            "html": value
        };
        return result;

    },


    getTabForLanguage: function (language) {

        var title = language.name;

        var formForLanguage = new Ext.Panel({
            title: title,
            iconCls: "pimcore_icon_language_" + language.key.toLowerCase(),
            bodyStyle: "padding:10px;",
            autoScroll: true,
            layout: 'vbox',
            border: false,
            x_nicename: title,
            x_key: language.key,
            x_diffCount: 0
        });

        formForLanguage.on("activate", this.panelActivated.bind(this, language.key));

        return formForLanguage;
    },

    executeFunctionByName: function (functionName, context /*, args */) {
        var args = Array.prototype.slice.call(arguments, 2);
        var namespaces = functionName.split(".");
        var func = namespaces.pop();
        for (var i = 0; i < namespaces.length; i++) {
            context = context[namespaces[i]];
        }
        return context[func].apply(context, args);
    },

    updateTitle: function () {
        var title = t("plugin_objectmerger_diff") + " " + this.data.o1key + "-" + this.data.o2key;
        if (this.changeCount) {
            title = title + " *";
        }
        this.panel.setTitle(title);
    },

    showDiff: function (response) {
        var accordion = Ext.getCmp("pimcore_panel_tree_left");
        accordion.collapse();

        var data = Ext.decode(response.responseText);
        var id = Ext.id();

        this.data = data;
        var items = data.items;

        this.updateTitle();

        var languages = data.languages;

        this.tab = new Ext.TabPanel({
            items: []
        });


        this.tabmap = {};

        for (var i = 0; i < languages.length; i++) {
            var lang = languages[i];
            var tabForLanguage = this.getTabForLanguage(lang);
            tabForLanguage.diffCount = 0;
            this.tabmap[lang.key] = tabForLanguage;
            this.tab.add(tabForLanguage);
        }

        this.resultData = {};

        for (var i = 0; i < items.length; i++) {
            var item = items[i];

            var mergedData = item.data2;

            if (item.value && item.value.type == "grid") {
                mergedData = this.mergeGridData(item.data, item.data2);
            }

            this.resultData[item.key] = {
                value: item.value2,
                data: mergedData,
                field: item.field,
                key: item.key,
                extData: item.extData,
                lang: item.lang,
                changed: false
            };

            if (item.isdiff) {
                if (item.lang) {
                    // get tab for language
                    var tab = this.tabmap[item.lang];
                    tab.x_diffCount++;
                } else {
                    for (var tab in this.tabmap) {
                        this.tabmap[tab].x_diffCount++;
                    }
                }
            }
        }

        for (var tab in this.tabmap) {
            var title = this.tabmap[tab].x_nicename;
            var diffCount = this.tabmap[tab].x_diffCount;
            if (diffCount > 0) {
                title = title + " (" + diffCount + ")";
                this.tabmap[tab].setTitle(title);
            }
        }

        this.panel.add(this.tab);
        this.tab.setActiveTab(0);
        this.panel.updateLayout();
    },

    mergeGridData: function(data, data2, reverse) {
        var mergedData = [];

        var existingStuff = {};
        var idx;

        if (data2) {
            for (idx = 0; idx < data2.length; idx++) {
                var rowItem =data2[idx];
                var itemId = rowItem["itemId"];

                if (existingStuff[itemId]) {
                    continue;
                }

                existingStuff[itemId] = true;

                rowItem["__selected"] = true;
                rowItem["__source"] = reverse ? "left" : "right";
                rowItem =  Ext.decode(Ext.encode(rowItem));
                mergedData.push(rowItem);
            }
        }

        if (data) {
            for (idx = 0; idx < data.length; idx++) {
                var rowItem = data[idx];
                var itemId = rowItem["itemId"];

                if (existingStuff[itemId]) {
                    continue;
                }

                existingStuff[itemId] = true;

                rowItem["__selected"] = false;
                rowItem["__source"] = reverse ? "right" : "left";
                rowItem =  Ext.decode(Ext.encode(rowItem));
                mergedData.push(rowItem);
            }
        }
        return mergedData;

    },

    changeData: function (apply, item, rightPreview, language, tabPanel, statusPanel, applyButton, fromEditor, injectedData) {
        var theValue;
        var theData;
        var changed;
        var diff;
        var iconCls;
        var btnText;

        var apply = applyButton.apply;
        if (apply) {
            theValue = item.value;

            if (theValue && theValue["type"] == "grid") {

                if (fromEditor) {
                    theData = injectedData;
                } else {
                    theData = this.mergeGridData(item.data2, item.data, true);
                }
                theValue = this.buildGridDataPreview(theData, true);
            } else {
                theData = item.data;
            }
            changed = true;
            iconCls = "plugin_objectmerger_icon_revert";
            btnText = t("plugin_objectmerger_revert");
            diff = -1;
            this.changeCount++;
        } else {
            theValue = item.value2;

            if (theValue && theValue["type"] == "grid") {
                var gridData = fromEditor ? injectedData : item.data2;
                if (fromEditor) {
                    theData = injectedData;
                } else {
                    theData = this.mergeGridData(item.data, item.data2);
                }
                theValue = this.buildGridDataPreview(theData, true);
            } else {
                theData = item.data2;
            }
            changed = false;
            iconCls = "plugin_objectmerger_icon_arrow_right";
            btnText = t("plugin_objectmerger_copy");
            diff = 1;
            this.changeCount--;
        }

        if (this.changeCount < 2) {
            this.updateTitle();
        }

        // update the tab title
        if (item.lang) {
            // only applies to this tab
            var title = this.tabmap[item.lang].x_nicename;
            this.tabmap[item.lang].x_diffCount += diff;
            if (this.tabmap[item.lang].x_diffCount > 0) {
                title = title + " (" + this.tabmap[item.lang].x_diffCount + ")";
            }
            this.tabmap[item.lang].setTitle(title);
        } else {
            for (var tab in this.tabmap) {
                var title = this.tabmap[tab].x_nicename;
                this.tabmap[tab].x_diffCount += diff;
                if (this.tabmap[tab].x_diffCount > 0) {
                    title = title + " (" + this.tabmap[tab].x_diffCount + ")";
                }
                this.tabmap[tab].setTitle(title);
            }
        }

        applyButton.apply = !apply;
        applyButton.setIconCls(iconCls);
        applyButton.setTooltip(btnText);

        this.resultData[item.key] = {
            value: theValue,
            data: theData,
            field: item.field,
            key: item.key,
            extData: item.extData,
            lang: item.lang,
            isdiff: item.isdiff,
            changed: changed
        }

        if (apply) {

            if (item.isdiff) {
                statusPanel.setText("");
            } else {
                statusPanel.setText("!!!");
            }
        } else {
            statusPanel.setText("!!!");
        }

        var rightPreviewClassName = Ext.getClassName(rightPreview);

        if (theValue && theValue.type) {
            if (theValue.type == "img") {
                this.replaceImage(rightPreview, theValue.src);
            } else if (theValue.type == "html" || theValue.type == "grid") {

                rightPreview.setHtml(
                    this.prependStyle(theValue.html)
                );
            } else {
                this.panelActivated(language, tabPanel);
            }
        } else {
            var value = theValue;
            if (typeof value == "undefined") {
                value = "[undefined]";
            }

            if (rightPreviewClassName == "Ext.panel.Panel") {
                rightPreview.removeAll();
            } else {
                rightPreview.setValue(value);
            }
        }
    },


    applyData: function (item, rightPreview, language, tabPanel, statusPanel, applyButton, fromEditor, injectedData) {
        this.changeData(true, item, rightPreview, language, tabPanel, statusPanel, applyButton, fromEditor, injectedData);

    },

    saveComplete: function (response) {
        var data = Ext.decode(response.responseText);
        if (data.success) {
            pimcore.plugin.broker.fireEvent("pluginObjectMergerPostMerge", data);
            pimcore.helpers.showNotification(t("success"), t("your_object_has_been_saved"), "success");
        } else {
            pimcore.helpers.showNotification(t("error"), t(data.message), "error");
        }
    }
});




/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */


pimcore.registerNS("pimcore.plugin.objectmerger.grideditor");
pimcore.plugin.objectmerger.grideditor = Class.create({

    changeCount: 0,

    initialize: function (item, currentData, callback) {
        this.item = item;
        this.currentData = currentData;
        this.callback = callback;
    },

    show: function () {
        var fields = ["__source", "__title", "__selected", "__raw", "__gridrow", "__unique"];

        var typesColumns = [];
        typesColumns.push({text: t('source'), sortable: true, dataIndex: '__source'});
        // typesColumns.push({text: t('selected'), sortable: true, dataIndex: '__selected'});
        // typesColumns.push({text: t('unique'), sortable: true, dataIndex: '__unique'});

        var data = [];

        var added = false;

        var existingStuff = {};


        var sourceData = this.currentData.data;
        if (sourceData) {
            var j;
            for (j = 0; j < sourceData.length; j++) {
                var rowItem = sourceData[j];
                var rawRaw = rowItem["raw"];
                var itemId = rowItem["itemId"];
                var gridrow = rowItem["gridrow"];

                var raw = Ext.decode(rawRaw);

                if (!added) {

                    added = true;
                    for (var key in gridrow) {
                        if (gridrow.hasOwnProperty(key)) {


                            var initialConfig = typeof this.item.value.columnConfig[key] !== "undefined" ? Ext.apply({}, this.item.value.columnConfig[key]) : {};
                            if (initialConfig.text) {
                                initialConfig.text = t(initialConfig.text);
                            }

                            if (!initialConfig.width && !initialConfig.flex) {
                                initialConfig.flex = 1;
                            }

                            var dataIndex = key == "id" ? "__id" : key;

                            fields.push(dataIndex);

                            var config = Ext.applyIf(initialConfig, {
                                text: t(key),
                                sortable: true,
                                dataIndex: dataIndex
                            });
                            typesColumns.push(config);
                        }
                    }
                }

                if (existingStuff[itemId]) {
                    continue;
                }

                existingStuff[itemId] = true;

                var rowData = raw;

                if (rowData['id']) {
                    rowData['__id'] = rowData['id'];
                    delete rowData['id'];
                }
                rowData['__source'] = t(rowItem["__source"]);
                rowData['__selected'] = rowItem["__selected"];
                rowData['__title'] = rowItem["title"];
                rowData['__raw'] = rawRaw;
                rowData['__gridrow'] = gridrow;
                rowData['__itemId'] = itemId;
                rowData['__unique'] = rowItem["unique"];

                data.push(rowData);
            }
        }

        typesColumns.push({
            xtype: 'actioncolumn',
            menuText: t('up'),
            width: 40,
            items: [
                {
                    tooltip: t('up'),
                    icon: "/bundles/pimcoreadmin/img/flat-color-icons/up.svg",
                    handler: function (grid, rowIndex) {
                        if (rowIndex > 0) {
                            var store = grid.getStore();
                            var rec = store.getAt(rowIndex);
                            var isSelected = this.selectionColumn.isSelected(rec);
                            store.removeAt(rowIndex);
                            store.insert(--rowIndex, [rec]);
                            if (isSelected) {
                                this.selectionColumn.select(rec, true);
                            }
                        }
                    }.bind(this)
                }
            ]
        });

        typesColumns.push({
            xtype: 'actioncolumn',
            menuText: t('down'),
            width: 40,
            items: [
                {
                    tooltip: t('down'),
                    icon: "/bundles/pimcoreadmin/img/flat-color-icons/down.svg",
                    handler: function (grid, rowIndex) {
                        if (rowIndex < (grid.getStore().getCount() - 1)) {
                            var store = grid.getStore();
                            var rec = store.getAt(rowIndex);
                            var isSelected = this.selectionColumn.isSelected(rec);
                            store.removeAt(rowIndex);
                            store.insert(++rowIndex, [rec]);
                            if (isSelected) {
                                this.selectionColumn.select(rec, true);
                            }
                        }
                    }.bind(this)
                }
            ]
        });

        this.store = new Ext.data.ArrayStore({
            proxy: {
                type: 'memory',
                reader: {
                    type: 'json'
                }
            },
            autoDestroy: true,
            data: data,
            fields: fields
        });

        this.selectionColumn = new Ext.selection.CheckboxModel({
            checkOnly: true,
            listeners: {
                select: function(selModel, selectedRecord) {
                    var uniqueId = selectedRecord.get("__unique");
                    if (!uniqueId) {
                        return;
                    }

                    var selection = selModel.getSelection();
                    var i;
                    for (i = 0; i < selection.length; i++) {
                        var otherRecord = selection[i];
                        var otherUniqueId = otherRecord.get("__unique");
                        if (otherUniqueId == uniqueId) {
                            if (selectedRecord.getId() != otherRecord.getId()) {
                                selModel.deselect(otherRecord);
                            }
                        }

                    }
                }.bind(this)
            }
        });

        this.grid = new Ext.grid.GridPanel({
            frame: false,
            autoScroll: true,
            store: this.store,
            columnLines: true,
            stripeRows: true,
            selModel: this.selectionColumn,
            columns: typesColumns,
            viewConfig: {
                // plugins: [
                //     {
                //         ptype: 'gridviewdragdrop',
                //         dragroup: 'objectclassselect'
                //     }
                // ],
                forceFit: true,
                listeners: {
                    drop: function () {
                        var selModel = this.grid.getSelectionModel();
                        selModel.select(this.selectedRecords);
                    }.bind(this)

                }
            }
        });

        this.selectedRecords = [];
        this.store.each(function (rec) {

            if (rec.get('__selected')) {
                this.selectedRecords.push(rec);
            }
        }.bind(this));

        var selModel = this.grid.getSelectionModel();
        selModel.select(this.selectedRecords);

        this.editWin = new Ext.Window({
            modal: false,
            title: t("edit") + " " + this.item.key,
            items: [this.grid],
            bodyStyle: "background: #fff;",
            width: 1000,
            maxHeight: 800,
            autoScroll: true,
            listeners: {
                close: function () {

                }.bind(this)
            },
            buttons: [
                {
                    text: t("save"),
                    iconCls: 'pimcore_icon_save',
                    handler: function () {
                        var result = [];
                        this.store.each(function (rec) {
                            var isSelected = this.selectionColumn.isSelected(rec);

                            var raw = rec.get('__raw');
                            var source = rec.get('__source');
                            var title = rec.get('__title');
                            var gridrow = rec.get('__gridrow');
                            var itemId = rec.get('__itemId');
                            var unique = rec.get('__unique');

                            var resultItem = {
                                "__selected": isSelected,
                                "__source": source,
                                "itemId": itemId,
                                "title": title,
                                "raw": raw,
                                "gridrow": gridrow,
                                "unique": unique
                            };

                            result.push(resultItem);

                        }.bind(this));


                        this.callback(result);

                        this.editWin.close();
                    }.bind(this)
                },
                {
                    text: t("cancel"),
                    iconCls: 'pimcore_icon_cancel',
                    handler: function () {
                        this.editWin.close();
                    }.bind(this)
                }
            ]
        });
        this.editWin.show();
        this.editWin.updateLayout();
    }
});




pimcore.registerNS("pimcore.plugin.extendadmin");

pimcore.plugin.extendadmin = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.extendadmin";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);

    },

    postOpenObject: function (object, type) {
        if (object.data.general.o_className == 'Car' && object.data.data.objectType == "actual-car") {
            object.toolbar.add({
                text: t('print-pdf'),
                iconCls: 'pimcore_icon_pdf',
                scale: 'small',
                handler: function () {
                    var path = "/en/product-print?id=" + object.id;
                    window.open(path);
                }.bind(this)
            });
            pimcore.layout.refresh();
        }
    }
});

var extendadmin = new pimcore.plugin.extendadmin();



