<?php

/**
  * @OA\Get(
  *      path="/v1/entities/data-penyuluhan",
  *      operationId="browseD.IN.7-DataPelaksanaanKegiatanPenyuluhanHukum",
  *      tags={"data-penyuluhan"},
  *      summary="Browse D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      description="Returns list of D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/data-penyuluhan/read?slug=data-penyuluhan&id={id}",
  *      operationId="readD.IN.7-DataPelaksanaanKegiatanPenyuluhanHukum",
  *      tags={"data-penyuluhan"},
  *      summary="Get D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum based on id",
  *      description="Returns D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/data-penyuluhan/add",
  *      operationId="addD.IN.7-DataPelaksanaanKegiatanPenyuluhanHukum",
  *      tags={"data-penyuluhan"},
  *      summary="Insert new D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      description="Insert new D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"triwulan":"Abc", "tema":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "jmlPeserta":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/data-penyuluhan/edit",
  *      operationId="editD.IN.7-DataPelaksanaanKegiatanPenyuluhanHukum",
  *      tags={"data-penyuluhan"},
  *      summary="Edit an existing D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      description="Edit an existing D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"triwulan":"Abc", "tema":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "jmlPeserta":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/data-penyuluhan/delete",
  *      operationId="deleteD.IN.7-DataPelaksanaanKegiatanPenyuluhanHukum",
  *      tags={"data-penyuluhan"},
  *      summary="Delete one record of D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      description="Delete one record of D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-penyuluhan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/data-penyuluhan/delete-multiple",
  *      operationId="deleteMultipleD.IN.7-DataPelaksanaanKegiatanPenyuluhanHukum",
  *      tags={"data-penyuluhan"},
  *      summary="Delete multiple record of D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      description="Delete multiple record of D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-penyuluhan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/data-penyuluhan/sort",
  *      operationId="sortD.IN.7-DataPelaksanaanKegiatanPenyuluhanHukum",
  *      tags={"data-penyuluhan"},
  *      summary="Sort existing D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      description="Sort existing D.IN.7 - Data Pelaksanaan Kegiatan Penyuluhan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-penyuluhan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "triwulan":"Abc", "tema":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "jmlPeserta":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "triwulan":"Abc", "tema":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "tempat":"Abc", "jmlPeserta":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="triwulan"), 
  *                         @OA\Property(type="string", property="tema"), 
  *                         @OA\Property(type="string", property="waktu"), 
  *                         @OA\Property(type="string", property="tempat"), 
  *                         @OA\Property(type="string", property="jmlPeserta"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */