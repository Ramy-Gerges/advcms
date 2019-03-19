<?php

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;
use App\Category;
class CategoryDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('edit', 'dashboard.categories.btn.edit')
            ->addColumn('delete', 'dashboard.categories.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Category::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters([
                'dom'        => 'Blfrtip',              
                'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, trans('admin.all_record')]],
                'buttons'    => [
                

                    ['extend' => 'print', 'className' => 'btn btn-primary', 'text' => '<i class="fa fa-print"></i>'],

                    ['extend' => 'reload', 'className' => 'btn btn-default', 'text' => '<i class="fa fa-refresh"></i>'],
                    

                ],
                'initComplete' => " function () {
                    this.api().columns([1,2]).every(function () {
                        var column = this;
                        var input = document.createElement(\"input\");
                        $(input).appendTo($(column.footer()).empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                    });
                }",
                'language' => '',


            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
             [
                'name'  => 'id',
                'data'  => 'id',
                'title' => '#',
            ],
             [
                'name'  => 'name',
                'data'  => 'name',
                'title' => 'Category Name',
            ],

            [
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => 'Created_at',
            ], [
                'name'  => 'updated_at',
                'data'  => 'updated_at',
                'title' => 'Updated_at',
            ],
            [
                'name'       => 'edit',
                'data'       => 'edit',
                'title'      => 'Edit',
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],
            [
                'name'       => 'delete',
                'data'       => 'delete',
                'title'      => 'Delete',
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'cities_' . date('YmdHis');
    }
}
