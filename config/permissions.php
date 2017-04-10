<?php
use Cake\ORM\TableRegistry;
use CakeDC\Auth\Auth\Rules\Owner;   

return [
    'Users.SimpleRbac.permissions' => [
        [
            'role' => 'user',
            'controller' => 'Pages',
            'action' => ['display'],
        ],
        
        [
            'role' => 'user',
            'controller' => 'Bookmarks',
            'action' => ['index', 'view', 'add']
        ],
        
        [
            'role' => 'user',
            'controller' => 'Bookmarks',
            'action' => ['edit', 'delete'],
            'allowed' => new Owner(),
        ],
        
        [
            'role' => '*',
            'plugin' => 'CakeDC/Users',
            'controller' => 'Users',
            'action' => ['logout'],
        ],
        
        [
            'role' => '*',
            'plugin' => 'CakeDC/Users',
            'controller' => 'Users',
            'action' => ['profile'],
            'allowed' => function (array $user, $role, \Cake\Http\ServerRequest $request) {
                $userId = \Cake\Utility\Hash::get($request->getAttribute('params'), 'pass.0');
                if (!empty($userId) && !empty($user)) {
                    return $userId === $user['id'];
                }

                return true;
            }
        ]
    ]
];
