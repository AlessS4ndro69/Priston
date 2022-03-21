

        //creating scene
        var scene = new THREE.Scene();
        scene.background = new THREE.Color(0xffffff);

        //add camera
        var camera = new THREE.PerspectiveCamera(
            75,
            window.innerWidth/window.innerHeight
        );

        //renderer
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        //add geometry
        var geometry = new THREE.BoxGeometry(1,1,3);
        var material = new THREE.MeshBasicMaterial({color: 0x00ff00, wireframe: true});
        var geometry2 = geometry.clone();
        var cube = new THREE.Mesh(geometry, material);
        var cube2 = new THREE.Mesh(geometry2, material);

        //scene.add(cube);
        //scene.add(cube2);

        camera.position.z = 9;
// desde acaaaaaaaaa ------------
        const bones = [];

        const shoulder = new THREE.Bone();
        const elbow = new THREE.Bone();
        const hand = new THREE.Bone();

        shoulder.add( elbow );
        elbow.add( hand );

        bones.push( shoulder );
        bones.push( elbow );
        bones.push( hand );

        shoulder.position.y = -5;
        elbow.position.y = 0;
        hand.position.y = 5;

        const geometry3 = new THREE.CylinderGeometry( 5, 5, 5, 5, 15, 5, 30 );

        // create the skin indices and skin weights manually
        // (typically a loader would read this data from a 3D model for you)

        const position = geometry3.attributes.position;

        const vertex = new THREE.Vector3();

        const skinIndices = [];
        const skinWeights = [];

        for ( let i = 0; i < position.count; i ++ ) {

            vertex.fromBufferAttribute( position, i );

            // compute skinIndex and skinWeight based on some configuration data

            const y = ( vertex.y + 1 );

            const skinIndex = Math.floor( y / 4 );
            const skinWeight = ( y % 4 ) / 4;

            skinIndices.push( skinIndex, skinIndex + 1, 0, 0 );
            skinWeights.push( 1 - skinWeight, skinWeight, 0, 0 );

        }

        geometry3.setAttribute( 'skinIndex', new THREE.Uint16BufferAttribute( skinIndices, 4 ) );
        geometry3.setAttribute( 'skinWeight', new THREE.Float32BufferAttribute( skinWeights, 4 ) );

        // create skinned mesh and skeleton

        const mesh = new THREE.SkinnedMesh( geometry3, material );
        const skeleton = new THREE.Skeleton( bones);

        // see example from THREE.Skeleton

        const rootBone = skeleton.bones[ 0 ];
        mesh.add( rootBone );

        // bind the skeleton to the mesh

        mesh.bind( skeleton );

        // move the bones and manipulate the model

        skeleton.bones[ 0 ].rotation.x = -0.1;
        skeleton.bones[ 1 ].rotation.x = 0.2;

        scene.add(mesh);
        //scene.add(cube2);
// hasta acaaaaaaaaa ------------------
        
        //animation
        var animate = function(){
            requestAnimationFrame(animate);

            skeleton.bones[ 0 ].rotation.x += -0.01;
            skeleton.bones[ 0 ].rotation.y += -0.01;
            skeleton.bones[ 1 ].rotation.x += 0.02;
            skeleton.bones[ 1 ].rotation.y += 0.02;

            renderer.render(scene, camera);

        }

        animate();
        /*
        cube.rotation.x += 0;
        mesh.rotation.x += THREE.MathUtils.degToRad(90);
        //cube.rotation.y += 0.01;
        renderer.render(scene, camera);
*/