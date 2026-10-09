<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // to get all menu
    public function index()
    {
        $menus = Menu::all();

        return $menus;
    }

    // to get menu by id
    public function show(Request $request, $id)
    {

        $menu = Menu::find($id);

        if (! $menu) {
            return response()->json([
                'message' => 'Menu not found',
            ], 404);
        }

        return $menu;
    }

    // to create a new menu
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_available' => 'required|boolean',
        ]);

        $menu = Menu::create($validated);

        return $menu;
    }

    // to update menu by id
    public function update(Request $request, $id)
    {

        $menu = Menu::find($id);

        if (! $menu) {
            return response()->json([
                'message' => 'Menu not found',
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_available' => 'required|boolean',
        ]);

        $menu->update($validated);

        return $menu;
    }

    // to delete menu by id
    public function destroy(Request $request, $id)
    {
        $menu = Menu::find($id);

        if (! $menu) {
            return response()->json([
                'message' => 'Menu not found',
            ], 404);
        }

        $menu->delete();

        return response()->json([
            'message' => 'Menu deleted successfully',
        ]);
    }
}
